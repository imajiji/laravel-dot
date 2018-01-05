## Command log
- [Vagrant box centos/7 - Vagrant Cloud](https://goo.gl/EtS9oH)
- [php7.1をyumにてインストール | Skyarch Broadcasting](https://goo.gl/wvRpG9)
- [MySQL 5.7 を CentOS 7 に yum インストールする手順 | WEB ARCH LABO](https://goo.gl/ThF3Ng)
- [MySQL 5.7でrootユーザのパスワードを再設定 - Qiita](https://goo.gl/9AqW8A)


- composerのインストール
- .envファイルの設定
- ドキュメントルートの設定
- php artisan key:generate
- php artisan migrate:install
```
# php composer.phar create-project --prefer-dist laravel/laravel [myblog]

# php artisan make:migration create_posts_table --create=posts
# php artisan migrate

// テーブルのアップデート
# php artisan make:migration add_summary_to_posts_table --table=posts
# php artisan migrate
# php artisan migrate:status
(# php artisan migrate:rollback)

# php artisan make:model Post

-----
# php artisan tinker
$post = new App\Post();
$post->title = 'title 1';
$post->body = 'body 1';
$post->save();
App\Post::create(['title'=>'title 2', 'body'=>'body 2']);

App\Post::all()->toArray();
App\Post::where('id', '>', 1)->get()->toArray();
App\Post::where('id', '>', 1)->orderBy('created_at', 'desc')->get()->toArray();
App\Post::where('id', '>', 1)->take(1)->get()->toArray();
$post = App\Post::find(3);
$post->title = 'title 3 updated';
$post->save();
App\Post::all()->toArray();
App\Post::find(3)->update(['title'=>'title 3 updated again']);
App\Post::all()->toArray();
$post = App\Post::find(3);
$post->delete();
App\Post::all()->toArray();
-----

# php artisan make:controller PostsController

// バリデーションを入れる
# php artisan make:request PostRequest

// 画像テーブルの作成
# php artisan make:migration create_images_table --create=images
# php artisan make:model Image
（php artisan make:model Image -m でいっぺんにいける？）

```
// リネーム

[Migrationファイル内でrenameColumnがエラーになったのを解決 - Qiita](https://qiita.com/Frog_woman/items/d98b861a2033610798f7)

// シーダー（初期値の入力）
```
# php artisan make:seeder ArticlesTableSeeder
# php artisan db:seed
```
