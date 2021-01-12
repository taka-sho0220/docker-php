# dockerでのLaravel環境（php,Laravel,nginx,mysql）

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
        ・Laravel　/laravelフォルダ 
・docker-compose.yml

```


## コマンド

- docker立ち上げ

```

docker-compose up -d

```



