<h1 align="center"> Livewire-Blog </h1>
<p align="center"><code>Livewire-Blog</code>是一个基于<a href="https://learnku.com/docs/laravel/8.x" target="_blank">laravel-8</a>开发的一个博客系统</p>

## 功能特性
- [x] 基于 `tailwindcss` 设计的响应式页面，非常轻巧，简洁
- [x] 基于 `laravel-livewire` 的组件化布局
- [x] 用户注册登陆
- [x] 个人信息完善
- [x] 密码找回（队列邮件）
- [x] 评论回复（队列邮件通知）
- [x] 文章发布

## 环境
 - PHP >= 7.2.0
 - Laravel 8.* 
 
## 安装
 
- ```git clone https://github.com/youyingxiang/livewire-blog.git```
- 在 `.env` 文件配置好数据库
- 如果需要发送邮件也配置好对应的邮件信息
- 运行```php artisan migrate ```
- 运行```php artisan db:seed```
- 如果需要启动队列,请运行 ```php artisan queue:work --queue=high,low```

## 线上地址
[我的博客](https://blog.you-tang.com/) 

## 界面效果

![](https://cdn.learnku.com/uploads/images/202010/09/43464/V7XX6ccZqp.png!large)
![](https://cdn.learnku.com/uploads/images/202010/09/43464/DyUDznuBWF.png!large)
![](https://cdn.learnku.com/uploads/images/202010/09/43464/OglgUzw9Hy.png!large)

`Livewire-Blog` 基于以下组件和拓展开发:

+ [Laravel](https://laravel.com/)
+ [Dcat-Admin](http://www.dcatadmin.com/docs/master/introduction.html)
+ [tailwindcss](https://tailwindcss.com/)
+ [laravel-livewire](https://laravel-livewire.com/)
+ [alpinejs](https://github.com/alpinejs/alpine/)
+ [highlightjs](https://highlightjs.org/)
+ [overtrue/laravel-socialite](https://github.com/overtrue/laravel-socialite)
+ [laravel-jetstream](https://jetstream.laravel.com/)

## License
------------
>`Livewire-Blog` is licensed under [The MIT License (MIT)](LICENSE).
