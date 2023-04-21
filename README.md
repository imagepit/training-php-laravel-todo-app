# PHPダイジェスト研修 Laravel9 Todoアプリケーション

## 1. 概要

PHPダイジェスト研修のLaravel9 Todoアプリケーションです。

## 2. 環境

- PHP 8.0
- Laravel 9
- Docker

### 3. 使い方

_コマンド実行_
```bash
docker-compose up -d
docker-compose exec php bash
cd sampleProject
composer install
php artisan migrate
php artisan db:seed --class=TodoListSeeder
```

ブラウザで次のURLにアクセスすると、「Hello World!」というテキストが表示されます。

[http://localhost/list](http://localhost/list)
