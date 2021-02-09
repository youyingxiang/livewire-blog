<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Grid\SendEmail;
use App\Admin\Repositories\Post;
use App\Mail\PostPushMail;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\TagModel;
use App\Models\User;
use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class PostController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Post(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('category.name', '分类名称');

            $grid->column('tag_str', '标签');
            $grid->column('is_hot')->using(PostModel::HOT)->label(PostModel::HOT_COLOR);
            $grid->column('hot_image')->image('', 50, 50)->emp();
//            $grid->column('view', '浏览数');
            $grid->column('created_at');
            $grid->createMode(Grid::CREATE_MODE_DEFAULT);
            $grid->showQuickEditButton(false);
            $grid->actions(function (\Dcat\Admin\Grid\Displayers\Actions $actions) {
                $actions->disableEdit(false);
                $actions->append(new SendEmail());
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Post(['tag']), function (Form $form) {
            $form->text('title')->required();
            $form->select('category_id')->options(CategoryModel::orderBy('id', 'desc')->pluck('name', 'id'))->required();
            $form->textarea('introduce', '简介')->required()->saveAsString();
            $form->markdown('content')->languageUrl(admin_asset('@admin/dcat/plugins/editor-md/languages/zh-tw.js'))->required();
            $form->tags('tag', '标签')->pluck('name', 'name')->options(TagModel::OrderBy('id', 'desc')->pluck('name', 'name'))->saving(function ($value) {
                $name_arr = explode(',', $value);

                return array_map(function ($val) {
                    $tag = TagModel::firstOrCreate(['name' => trim($val)]);

                    return $tag->id;
                }, $name_arr);
            })->required();
            $form->select('is_hot')->options(PostModel::HOT)->when(PostModel::HOT_YES, function (Form $form) {
                $form->image('hot_image')->autoUpload()->uniqueName()->default(asset('images/default-post.png'))->saveAsString();
            })->default(0)->required();
        });
    }

    public function sendMail(int $id)
    {
        try {
            $post = PostModel::findOrFail($id);
            $user = User::query()->get();
            $user->each(function (User $user) use ($post) {
                Mail::to($user)->send(new PostPushMail($post));
            });

            return Response::json([
                'status' => true,
                'message' => '发送成功！',
            ]);
        } catch (\Exception $exception) {
            return Response::json([
                'status' => false,
                'message' => $exception->getMessage(),
            ]);
        }
    }
}
