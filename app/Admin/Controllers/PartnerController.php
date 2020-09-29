<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Partner;
use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;

class PartnerController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Partner(), function (Grid $grid) {
            $grid->model()->resetOrderBy();
            $grid->model()->orderBy('order', 'desc');
            $grid->column('name');
            $grid->column('introduce');
            $grid->column('image')->image('', 50, 50)->emp();
            $grid->column('order');
            $grid->column('created_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Partner(), function (Form $form) {
            $form->text('name')->required();
            $form->text('introduce')->required();
            $form->image('image')->autoUpload()->uniqueName()->saveAsString()->required();
            $form->number('order')->default(0)->required();
        });
    }
}
