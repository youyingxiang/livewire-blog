<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Post;
use App\Models\CategoryModel;
use App\Models\PostModel;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Widgets\Markdown;


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
//            $grid->column('content')->display(function ($val){
//                return $val;
//            });
            $grid->column('category_id');
            $grid->column('is_hot');
            $grid->column('hot_image');
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
        return Form::make(new Post(), function (Form $form) {

            $form->text('title')->required();
            $form->markdown('content')->languageUrl(admin_asset('@admin/dcat/plugins/editor-md/languages/zh-tw.js'))->required();;
            $form->select('category_id')->options(CategoryModel::orderBy('id', 'desc')->pluck('name', 'id'))->required();
            $form->select('is_hot')->options(PostModel::HOT)->when(PostModel::HOT_YES, function (Form $form) {
                $form->image('hot_image')->autoUpload()->saveAsString();
            })->default(0);


        });
    }
}
