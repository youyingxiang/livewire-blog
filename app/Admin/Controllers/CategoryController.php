<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Category;
use App\Models\CategoryModel;
use Dcat\Admin\Controllers\AdminController;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;

class CategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('parent_id');
            $grid->column('order');
            $grid->column('slug');
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
        return Form::make(new Category(), function (Form $form) {
            $form->text('name')->required();
            $form->select('parent_id')->options(CategoryModel::selectOptions());
            $form->number('order')->default(0)->required();
            $form->text('slug')->required();
        });
    }
}
