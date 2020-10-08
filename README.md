<p align="center"><code>Livewire-Blog</code>是一个基于<a href="https://learnku.com/docs/laravel/8.x" target="_blank">laravel-8</a>开发的一个博客系统</p>

## 功能特性

- [x] 用户管理
- [x] 基于 livewire 实现的搜索和评论 
- [x] 回复评论找回密码队列推送邮件消息

## 环境
 - PHP >= 7.2.0
 - Laravel 8.*
 - Fileinfo PHP Extension
 
 ## 安装
 
 > 如果安装过程中出现`composer`下载过慢或安装失败的情况，请运行命令`composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/`把`composer`镜像更换为阿里云镜像。

- ```git clone https://github.com/youyingxiang/livewire-blog.git```
- 在 `.env` 文件配置好数据库
- 如果需要发送邮件也配置好对应的邮件信息
- 运行```php artisan migrate ```
- 运行```php artisan db:seed```
- 如果需要启动队列,请运行 ```php artisan queue:work --queue=high,low```

## 线上地址
[我的博客](https://blog.you-tang.com/) 

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
`Livewire-Blog` is licensed under [The MIT License (MIT)](LICENSE).
