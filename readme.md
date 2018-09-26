
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
//ここの「src」がローカルファイルと同期されているので、ローカルファイルを変更すれば、ここも変更になるはず。
laradock@51aec74afbbb:/var/www$ ls
src  laradock
```

⑤ローカルファイルの確認
```
//dockerコンテナから抜ける
laradock@51aec74afbbb:/var/www$ exit
exit
//階層を一つ上がって、下記のようになっていたらOK
$ cd ../
src		laradock
```
⑥DB接続
```
laradock@:/var/www/src$ cp .env.example .env
laradock@:/var/www/src$ vim .env
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

laradock@:/var/www/src$ composer install
laradock@:/var/www/src$ php artisan migrate
laradock@:/var/www/src$ php artisan key:generate
```

⑦Laradock側のenvファイルにパスを通す
```
 laradock@:/var/www/src$ exit
 $ cd ../
 $ cd laradock
 $ vim .env
 // 下記を変更する

 ############################
 # General Setup
 ############################
 
 # Point to the path of your applications code on your host
 
 - APP_CODE_PATH_HOST=../  
 + APP_CODE_PATH_HOST=../src/
```

⑧確認
```
laradock@:/var/www/src$ php artisan --version
Laravel Framework 5.5.43
laradock@:/var/www/src$ php -v
PHP 7.2.4-1+ubuntu16.04.1+deb.sury.org+1 (cli) (built: Apr  5 2018 08:53:57) ( NTS )
```

Appendix
```
// 各バージョンの確認
 laradock@:/var/www/src$ npm -v
 6.4.1
 
 laradock@:/var/www/src$ node -v
 v10.10.0
 
 // nodemodule(package.jsonを) インストール
 laradock@:/var/www/src$ npm install
 
 // 全タスクの実行
 laradock@:/var/www/src$ npm run dev
 
 // 毎回ビルドしなくても、コンパイルしてくれるらしいよ!?
 laradock@:/var/www/src$ npm run watch

 //nginxの設定を変更した時は、下記のコマンドを打っておく
 $ docker-compose build --no-cache nginx 
```
## Usage
issueの管理やブランチの管理については検討中

