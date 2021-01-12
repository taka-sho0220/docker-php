# dockerでのphp環境（php,nginx,mysql）

## ディレクトリ

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
        ・index.php
・docker-compose.yml

```


## コマンド

- docker立ち上げ

```

docker-compose up -d

```



