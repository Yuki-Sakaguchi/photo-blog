# LavabelでSPAの写真ブログを作る

## クローンした後
- .envファイルを作る
- npm install でnode_modulesを作成
- composer installでvendorを作成
- php artisan key:generate
- [その他](http://vdeep.net/laravel-git-clone)


## サーバーを起動
~~~
php artisan serve
~~~

## Larabelプロジェクトを作成
~~~
composer create-project laravel/laravel myapp --prefer-dist
~~~

## laravelでプロジェクトを作る
- [MacにComposerをインストールする](http://mawatari.jp/archives/install-composer-in-mac)
- [laravelをスタートしよう](http://libro.tuyano.com/index3?id=11526003)

## ディレクトリ構成
- 「app」フォルダ――これが、アプリケーションの本体部分になります。アプリケーションの開発を行う際には、ここにPHPのプログラムを配置していきます。
- 「bootstrap」フォルダ――アプリケーションのブートストラップ・プログラムです。起動してからの各種処理が用意されています。
- 「config」フォルダ――アプリケーションの各種設定情報を記述するところです。
- 「database」フォルダ――データベース関連のふぁいるをまとめたところです。
- 「public」フォルダ――公開フォルダです。MVCアーキテクチャーを使わない普通のHTMLファイルなどはここに配置します。
- 「resources」フォルダ――アプリケーションで使用するリソースファイルを置くところです。MVCのビュー（画面表示）のテンプレートファイルなどはここに置きます。
- 「storage」フォルダ――データ保存のための場所です。セッションやキャッシュなどの保存ファイルが作成されます。
- 「tests」フォルダ――ユニットテスト関連のファイルの配置場所です。
- 「vendor」フォルダ――ベンダーが作成するプログラム類がまとめられています。


# 以下Laravelのデフォルトのreadme

# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
