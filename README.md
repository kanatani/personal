<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Person

心理学で最も信頼されているbig5に基づいた性格診断アプリです。
URL : <a href="https://http://www.awspersonalityapp.com/">my application</a>

## アプリ開発の背景
私が心理学科を専攻していて、心理学の知識を活かしてアプリ開発をしてみたいと考えたのがきっかけです。

また、自分の性格を客観的に知って行くのは今後の人生の選択(就活や生活スタイルの確率)に役立てるのではないかと考えたことも影響しています。

## 使用した技術
-  フロントエンド
    - HTML / CSS / Bootstrap
    - jquery 3.1.0
    - vue.js 2.5.17

- バックエンド
     - php 7.3
     - laravel 8.0
     - PHPUnit 9.3

- インフラ
    - AWS (EC2, RDS, S3(画像アップロード用),Route53,VPC,IAM,CloudFront)
    - Docker 19.03.12 
    - docker-compose 1.26.2
    - laradock
    - mysql 8.0.23
    - nginx （開発環境)
    - apache (本番環境)

- その他
    - Visual Studio Code 

## 機能一覧
- 性格診断
    - 5つの性格特性(外向性、開放性、神経症的傾向、勤勉性、協調性)のテスト
    - chart.jsでテストの点数をグラフ化

- ログイン関連
    - ログイン、ログアウト機能
    - シングルページアプリケーション(vue.js)
    - 新規登録機能

- 画像アップロード
    - AWS S3バケットを使用

- ユーザー検索
    - useridを使ってユーザーを検索
    - 非同期通信(jQuery/ajax)
    - ユーザーの性格を確認できる

- いいね機能
    - 互いにいいねを押すとチャット欄が作成
    - 非同期通信(jQuery/ajax)

- コミュニティ機能
    - 自分でグループを作成
    - 作成されたグループに参加できる
    - シングルページアプリケーション(vue.js)
    - 参加しているユーザー一覧
    - コミュニティ検索機能

- チャット機能
    - ユーザー同士がいいねするとチャット蘭が作成
    - 非同期通信(vue.js/axios)
    - グループチャット機能

- その他
    - レスポンシブデザイン
    - ハンバーガーメニュー(vue.js)

### DB設計
|Column|Options|
|------|-------|
|user_id|integer|null: false, foreign_key: true|
|group_id|integer|null: false, foreign_key: true|
