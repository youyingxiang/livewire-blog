<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Comment;
use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;

class CommentController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Comment(['post', 'target']), function (Grid $grid) {
            $grid->column('post.title', '文章标题');
            $grid->column('user.name', '用户');
            $grid->column('content_str', '回复内容')->display(function ($val) {
                return $val;
            });
            $grid->column('created_at');
            $grid->disableActions();
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
