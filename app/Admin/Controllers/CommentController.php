<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Comment;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Controllers\AdminController;

class CommentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Comment(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('post_id');
            $grid->column('parent_id');
            $grid->column('target_id');
            $grid->column('user_id');
            $grid->column('content');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Comment(), function (Form $form) {
            $form->display('id');
            $form->text('post_id');
            $form->text('parent_id');
            $form->text('target_id');
            $form->text('user_id');
            $form->text('content');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
