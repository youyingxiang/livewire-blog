<?php

namespace Database\Seeders;

use Dcat\Admin\Models\Administrator;
use Dcat\Admin\Models\Menu;
use Dcat\Admin\Models\Permission;
use Dcat\Admin\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $createdAt = date('Y-m-d H:i:s');

        // create a user.

        Role::truncate();
        Menu::truncate();
        Permission::truncate();
        Administrator::truncate();
        DB::table('admin_roles')->truncate();
        DB::table('admin_users')->truncate();
        DB::table('admin_permissions')->truncate();
        DB::table('admin_role_users')->truncate();
        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_permission_menu')->truncate();
        DB::table('admin_role_menu')->truncate();

        Administrator::create([
            'username'   => 'admin',
            'password'   => bcrypt('admin'),
            'name'       => 'Administrator',
            'created_at' => $createdAt,
        ]);

        // create a role.

        Role::create([
            'name'       => 'Administrator',
            'slug'       => Role::ADMINISTRATOR,
            'created_at' => $createdAt,
        ]);

        Administrator::first()->roles()->save(Role::first());

        Permission::insert([
            [
                'id'          => 1,
                'name'        => '权限管理',
                'slug'        => 'auth-management',
                'http_method' => '',
                'http_path'   => '',
                'parent_id'   => 0,
                'order'       => 1,
                'created_at'  => $createdAt,
            ],
            [
                'id'          => 2,
                'name'        => '管理员',
                'slug'        => 'users',
                'http_method' => '',
                'http_path'   => '/auth/users*',
                'parent_id'   => 1,
                'order'       => 2,
                'created_at'  => $createdAt,
            ],
            [
                'id'          => 3,
                'name'        => '角色',
                'slug'        => 'roles',
                'http_method' => '',
                'http_path'   => '/auth/roles*',
                'parent_id'   => 1,
                'order'       => 3,
                'created_at'  => $createdAt,
            ],
            [
                'id'          => 4,
                'name'        => '权限',
                'slug'        => 'permissions',
                'http_method' => '',
                'http_path'   => '/auth/permissions*',
                'parent_id'   => 1,
                'order'       => 4,
                'created_at'  => $createdAt,
            ],
            [
                'id'          => 5,
                'name'        => '菜单',
                'slug'        => 'menu',
                'http_method' => '',
                'http_path'   => '/auth/menu*',
                'parent_id'   => 1,
                'order'       => 5,
                'created_at'  => $createdAt,
            ],
            [
                'id'          => 6,
                'name'        => '日志',
                'slug'        => 'operation-log',
                'http_method' => '',
                'http_path'   => '/auth/logs*',
                'parent_id'   => 1,
                'order'       => 6,
                'created_at'  => $createdAt,
            ],
        ]);

//        Role::first()->permissions()->save(Permission::first());

        // add default menus.

        Menu::insert([
            [
                'parent_id'     => 0,
                'order'         => 1,
                'title'         => '首页',
                'icon'          => 'feather icon-bar-chart-2',
                'uri'           => '/',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 0,
                'order'         => 2,
                'title'         => '权限管理',
                'icon'          => 'feather icon-settings',
                'uri'           => '',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 2,
                'order'         => 3,
                'title'         => '管理员',
                'icon'          => '',
                'uri'           => 'auth/users',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 2,
                'order'         => 4,
                'title'         => '角色',
                'icon'          => '',
                'uri'           => 'auth/roles',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 2,
                'order'         => 5,
                'title'         => '权限',
                'icon'          => '',
                'uri'           => 'auth/permissions',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 2,
                'order'         => 6,
                'title'         => '菜单',
                'icon'          => '',
                'uri'           => 'auth/menu',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 2,
                'order'         => 7,
                'title'         => '日志',
                'icon'          => '',
                'uri'           => 'auth/logs',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 0,
                'order'         => 8,
                'title'         => '内容管理',
                'icon'          => 'fa-paste',
                'uri'           => '',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 8,
                'order'         => 9,
                'title'         => '文章管理',
                'icon'          => '',
                'uri'           => 'posts',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 8,
                'order'         => 10,
                'title'         => '标签管理',
                'icon'          => '',
                'uri'           => 'tags',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 8,
                'order'         => 11,
                'title'         => '分类管理',
                'icon'          => '',
                'uri'           => 'categorys',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 8,
                'order'         => 12,
                'title'         => '合作伙伴',
                'icon'          => '',
                'uri'           => 'partners',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 8,
                'order'         => 13,
                'title'         => '友情链接',
                'icon'          => '',
                'uri'           => 'links',
                'created_at'    => $createdAt,
            ],
            [
                'parent_id'     => 8,
                'order'         => 14,
                'title'         => '评论管理',
                'icon'          => '',
                'uri'           => 'comments',
                'created_at'    => $createdAt,
            ],
        ]);

        (new Menu())->flushCache();
    }
}
