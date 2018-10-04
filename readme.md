
Overview

## Install

①ローカルの作業フォルダーを作成する
```
 $ mkdir team_ponkotu
 $ cd team_ponkotu/
 $ git clone https://github.com/LaraDock/laradock.git
 $ cd laradock/
```

②envファイルを書き換える
```
$ cp env-example .env
$ vim .env 
//envファイルに下記のような欄があるので、下記と同じように書き換えてください。
### MYSQL ##################################
MYSQL_VERSION=5.7.22 
MYSQL_DATABASE=homestead 
MYSQL_USER=homestead　
MYSQL_PASSWORD=hogehoge
MYSQL_PORT=3306
MYSQL_ROOT_PASSWORD=root
MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d
```

③Dockerコンテナを起動(laradockのディレクトリで実行)
```
$ docker-compose up -d nginx mysql phpmyadmin workspace
$ docker-compose ps
下のような画面が出ればOK
           Name                          Command              State                    Ports                  
--------------------------------------------------------------------------------------------------------------
laradock_docker-in-docker_1   dockerd-entrypoint.sh           Up      2375/tcp                                
laradock_mysql_1              docker-entrypoint.sh mysqld     Up      0.0.0.0:3306->3306/tcp, 33060/tcp       
laradock_nginx_1              nginx                           Up      0.0.0.0:443->443/tcp, 0.0.0.0:80->80/tcp
laradock_php-fpm_1            docker-php-entrypoint php-fpm   Up      9000/tcp                                
laradock_phpmyadmin_1         /run.sh supervisord -n          Up      0.0.0.0:8080->80/tcp, 9000/tcp          
laradock_workspace_1          /sbin/my_init                   Up      0.0.0.0:2222->22/tcp      
```

④ Laravelインストール
立ち上がっているコンテナに入り、Laravelをインストールする

```
$ docker-compose exec --user=laradock workspace bash
laradock@:/var/www$ git clone https://github.com/goombeer/team_ponkotu.git
//lsコマンドで下記のようになっていたら、OK
//ここの「team_ponkotu」がローカルファイルと同期されているので、ローカルファイルを変更すれば、ここも変更になるはず。
laradock@51aec74afbbb:/var/www$ ls
team_ponkotu  laradock
```

⑤ローカルファイルの確認
```
//dockerコンテナから抜ける
laradock@51aec74afbbb:/var/www$ exit
exit
//階層を一つ上がって、下記のようになっていたらOK
$ cd ../
team_ponkotu		laradock
```
⑥DB接続
```
laradock@:/var/www/team_ponkotu$ cp .env.example .env
laradock@:/var/www/team_ponkotu$ vim .env
//MySQLの設定を下記のように書き換える
--------------------
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=hogehoge
--------------------

//必要なものを諸々入れてくれる

laradock@:/var/www/team_ponkotu$ composer install
laradock@:/var/www/team_ponkotu$ php artisan migrate
laradock@:/var/www/team_ponkotu$ php artisan key:generate
```

⑦Laradock側のenvファイルにパスを通す
```
 laradock@:/var/www/team_ponkotu$ exit
 $ cd ../
 $ cd laradock
 $ vim .env
 // 下記を変更する

 ############################
 # General Setup
 ############################
 
 # Point to the path of your applications code on your host
 
 - APP_CODE_PATH_HOST=../  
 + APP_CODE_PATH_HOST=../team_ponkotu/
```

⑧確認
```
laradock@:/var/www/team_ponkotu$ php artisan --version
Laravel Framework 5.5.43
laradock@:/var/www/team_ponkotu$ php -v
PHP 7.2.4-1+ubuntu16.04.1+deb.sury.org+1 (cli) (built: Apr  5 2018 08:53:57) ( NTS )
```

Appendix
```
// 各バージョンの確認
 laradock@:/var/www/team_ponkotu$ npm -v
 6.4.1
 
 laradock@:/var/www/team_ponkotu$ node -v
 v10.10.0
 
 // nodemodule(package.jsonを) インストール
 laradock@:/var/www/team_ponkotu$ npm install
 
 // 全タスクの実行
 laradock@:/var/www/team_ponkotu$ npm run dev
 
 // 毎回ビルドしなくても、コンパイルしてくれるらしいよ!?
 laradock@:/var/www/team_ponkotu$ npm run watch

 //nginxの設定を変更した時は、下記のコマンドを打っておく
 $ docker-compose build --no-cache nginx 
```

# 作業手順
## ブランチについて
gitのブランチはmasterからチェックアウトして、新たなブランチを作成してください。

### マスターブランチに切り替える
```
git checkout master
```

### リモートリポジトリの最新情報をローカルに落としてくる 
```
$ git pull
```

### ローカル環境にて、ブランチを作成
```
$ git checkout -b feature/#1(issueと同じ数字)
```

### ローカル環境にて、実装したものを、リモートリポジトリーにpush
いじいじ
```
$ git add ファイル名
$ git commit -m ' コミットメッセージ'
$ git push origin feature/#1
```
### Github上でPRを作成
下記の内容を記載する 
 - 作業内容
 - 重点的にレビューをお願いしたい箇所

### レビュー or セルフマージ

## issue命名規則
- `__issue番号__何を__どのページ`
- 上記は参考程度です。
