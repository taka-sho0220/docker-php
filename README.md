# \:airplane:ひとりでいけるモン
作成者の趣味である一人旅の経験から、一人旅専用の口コミサイトを作成しました。
一人旅が好きな方、一人旅について興味がある方にとっての旅先の参考になればと思い、作成しました。


|        トップ画面                |            お問い合わせ画面               |
|---------------------------------|------------------------------------------|
|  ![トップ画面](read_img/main.png) | ![お問い合わせ画面](read_img/contact.png) |


|        ログイン画面                   |           新規登録画面               |
|--------------------------------------|-------------------------------------|
|  ![ログイン画面](read_img/login.png)  | ![新規登録画面](read_img/sign.png)   |


|         管理トップ画面              |
|------------------------------------|
|  ![管理画面](read_img/admin.png)   |


|             投稿フォーム画面            |             投稿写真一覧画面            |
|----------------------------------------|---------------------------------------|
|  ![投稿フォーム画面](read_img/form.png) | ![各県投稿写真画面](read_img/photo.png) |


|         投稿編集画面                    |           投稿詳細画面                |             投稿削除画面　　         |
|----------------------------------------|--------------------------------------|-------------------------------------|
|  ![投稿編集画面](read_img/detail.png)     |   ![投稿詳細画面](read_img/edit.png) |  ![投稿削除画面](read_img/delite.png)|



## \:notebook:主な機能
```
・サイトメインページ（サイトメイン画面、お問い合わせフォーム画面）
・ログイン画面等（ログイン画面、新規登録画面、パスワード変更画面）
・CRUD機能(作成、編集、更新、削除機能)
・テーブル検索機能
・ページネーション機能
```


## \:wrench:docker環境（php（laravel）,nginx,mysql）

### 環境設定
```
・windows10
・ docker 20.10.2
・ php 7.4
 ・ laravel 6.2.7
・ nginx 1.19.6
・ mysql 5.7

```

## \:closed_lock_with_key:ダウンロード方法

### ダウンロード方法

Githubからダウンロードするかgit cloneしてください。

ダウンロード先
https://github.com/taka-sho0220/docker-travel.git

git cloneする場合
```
git clone https://github.com/taka-sho0220/docker-travel.git
```

### シボリックリンク設定

投稿された画像の保存場所をstoragフォルダ内に保存しております。
またその画像を読み込む必要性がるときはシボリックリンク設定する必要があるため、下記のコマンドを実行してください。
```
php artisan storage:link
```

## \:package:データベース設計


- 会員登録者データベース

データベース名:travel
テーブル名:users

|       Column      |     Type     | Null  | key | Default |　   Extra    |
| :---------------: | :----------: | :---: |:---:| :-----: | :----------: |   
| id                | bigint(20)   | No    | PRI | None    |auto_increment|
| name              | varchar(191) | No    |     | None    |              |
| email             | varchar(191) | No    |     | None    |              |
| email_verified_at | timestamp    | Yes   |     | Null    |              |
| password          | varchar(191) | No    |     | None    |              |
| remember_token    | varchar(100) | Yes   |     | Null    |              |
| created_at        | timestamp    | Yes   |     | NUll    |              |
| updated_at        | timestamp    | Yes   |     | Null    |              |


- パスワードリセットデータベース

データベース名:travel
テーブル名:password_resets

|   Column   |     Type     | Null  | key | Default |　  Extra     |
| :--------: | :----------: | :---: |:---:|  :---:  | :----------: |   
| email      | varchar(191) | No    |     | None    |              |
| token      | varchar(191) | No    |     | None    |              |
| created_at | timestamp    | Yes   |     | NUll    |              |


- お問い合わせデータベース

データベース名:travel
テーブル名:contacts

|   Column   |     Type    | Null  | key | Default |　  Extra     |
| :--------: | :---------: | :---: |:---:|  :---:  | :----------: |   
| id         | bigint(20)  | No    | PRI | None    |auto_increment|
| name       | varchar(191)| No    |     | None    |              |
| email      | varchar(191)| No    |     | None    |              |
| message    | text        | No    |     | None    |              |
| created_at | timestamp   | Yes   |     | NUll    |              |
| updated_at | timestamp   | Yes   |     | Null    |              |


- 投稿内容データベース

データベース名:travel
テーブル名:travels

|     Column    |     Type     | Null  | key | Default |　  Extra     |
| :-----------: | :----------: | :---: |:---:|  :---:  | :----------: |   
| id            | bigint(20)   | No    | PRI | None    |auto_increment|
| name          | varchar(191) | No    |     | None    |              |
| prefecture_id | varchar(191) | No    |     | None    |              |
| gender        | varchar(191) | No    |     | None    |              |
| age           | varchar(191) | No    |     | None    |              |
| evaluation    | varchar(191) | No    |     | None    |              |
| impressions   | text         | No    |     | None    |              |
| photos        | varchar(191) | No    |     | Null    |              |
| terms         | varchar(191) | No    |     | None    |              |
| created_at    | timestamp    | Yes   |     | NUll    |              |
| updated_at    | timestamp    | Yes   |     | Null    |              |


- 各都道府県データベース

データベース名:travel
テーブル名:prefecture

|     Column    |     Type     | Null  | key | Default |　  Extra     |
| :-----------: | :----------: | :---: |:---:|  :---:  | :----------: |   
| id            | bigint(20)   | No    | PRI | None    |auto_increment|
| region_id     | int(20)      | No    |     | None    |              |
| place         | varchar(191) | No    |     | None    |              |




### migration方法

各種databese設計に関しては、migrationファイル(database/migrations)を作成しております。
コマンドでマイグレーションを行っていただくと、テーブルが作成できます。

```
php artisan migrate
```



## \:open_file_folder:フォルダ構成

### フォルダ構成
```

・docker-php
  ・mysql /データベース周り設定
  ・nginx /ウェブサーバー周りの設定
    ・default.conf 
  ・php /phpの設定
    ・Dockerfile
    ・php.ini
　・www　/作業ディレクトリ
 　　・html
        ・laravel /laravelのフォルダ（下記詳細記載）
・docker-compose.yml

```
### laraveのフォルダ構成
```
・app/ アプリのメインフォルダ
　・Http/
 　　・Controllers/
   　　　・HomeController　ログインコントローラー
     　　・TravelController　メインコントローラー
     ・Requests/
         ・ContactRequest お問い合わせのバリデーション
         ・TravelRequest 写真登録のバリデーション
　・Mail/
     ・ContactMail  メール送信の設定
  ・Models
     ・Contact お問い合わせのデータベース設定
     ・Travel 写真登録のデータベース設定
     
・bootstrap/ 処理処理やキャッシュ等のフォルダ
     ・cache/
         ・config 各種管理ページ設定
         
・config/ アプリの設定フォルダ
     ・adminlte /adminlteの設定
     
・database/ データベース(マイグレーション)フォルダ
     ・factories 
        ・ContactFactory,TravelFactory,UserFactory　/各データベースのテスト用のファクトリー
     ・migrations /各migrrationフォルダ
     
・public/ 画像,JS,CSS等フォルダ
     ・vender /adminlteのjs,css
     
・resources/ Blade等(viewの置き場所)フォルダ
     ・view
        ・auth/ ログイン等のview
        ・contact/
            ・mail お問い合わせメールの送信内容
        ・mains/ メインページのview
        ・travel_pages/ ログイン後ページのview
        
・routes/ URL設定フォルダ
      ・web.php route設定ファイル
      
・storage/ セッション及びログフォルダ
      ・app/public/profiles 投稿画像の保存場所(シボリックリンク設定方法)

・tests/ テスト用フォルダ
      ・Unit
        ・travelTest.php /テスト用ファイル

・vendor/ Composerの依存内容フォルダ

.env/ 各種設定
.env.testing /テスト設定
```




