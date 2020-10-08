<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Post;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\TagModel;
use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;

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
            $form->multipleSelect('tag', '标签')->options(TagModel::OrderBy('id', 'desc')->pluck('name', 'id'))->customFormat(function (array $v) {
                return array_column($v, 'id');
            })->required();

            $form->select('is_hot')->options(PostModel::HOT)->when(PostModel::HOT_YES, function (Form $form) {
                $form->image('hot_image')->autoUpload()->uniqueName()->default(asset("images/default-post.png"))->saveAsString();
            })->default(0)->required();
//            $form->number('view', '浏览数量')->default(0)->required();
        });
    }
}
