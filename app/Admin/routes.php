<?php

use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->post('/posts/send-mail/{id}', 'PostController@sendMail')->name('posts.send-mail');
    $router->resource('posts', 'PostController');
    $router->resource('tags', 'TagController');
    $router->resource('categorys', 'CategoryController');
    $router->resource('partners', 'PartnerController');
    $router->resource('links', 'LinkController');
    $router->resource('comments', 'CommentController');
});
