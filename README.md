<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Person

性格診断をテーマにしたマッチングアプリです。
<br>
アプリのURL : <a href="https://www.awspersonalityapp.com/">my application</a>
<br>
<br>
<img width="1440" alt="スクリーンショット 2021-01-31 20 18 15" src="https://user-images.githubusercontent.com/64293493/106382311-1336c200-6402-11eb-985d-4994149493f9.png">



## アプリ開発の概要
私が心理学科を専攻していて、心理学の知識を活かしてアプリ開発をしてみたいと考えたのがきっかけです。

自分の性格を客観的に知って行くのは今後の人生の選択(就活や生活スタイルの確率)に役立てるのではないかと考えたことも影響しています。
<br>
Personは５つの性格特性(外向性、協調性、開放性、神経症的傾向、勤勉性)から客観的に自分の性格を見ることができます。5つの特性から性格を見ることによってより多角的に自分を知ることができます。

<br>
<img width="1440" alt="スクリーンショット 2021-01-31 20 18 33" src="https://user-images.githubusercontent.com/64293493/106382394-b556aa00-6402-11eb-9ecd-6abd051a5c1f.png">
<br>
<img width="1440" alt="スクリーンショット 2021-01-31 20 29 28" src="https://user-images.githubusercontent.com/64293493/106382459-18e0d780-6403-11eb-84f3-2da8b4a3c756.png">


## 使用した技術
-  フロントエンド
    - HTML / CSS / Bootstrap
    - jquery 3.2
    - vue.js 2.5.17
    - chart.js 2.8.0

- バックエンド
     - php 7.3
     - laravel 8.0
     - PHPUnit 9.3

- インフラ
    - AWS (EC2, RDS, S3(画像アップロード用),Route53,VPC,IAM,CloudFront,ACM,ALB)
    - Docker 19.03.12 
    - docker-compose 1.26.2
    - laradock
    - mysql 8.0.23
    - nginx （開発環境)
    - apache (本番環境)
    - Circle CI/CD

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
    - お問い合わせ機能

### インフラ設計
![Untitled Diagram (2)](https://user-images.githubusercontent.com/64293493/106711775-592a9a80-663b-11eb-9362-ef21ad606548.png)


### DB設計
|テーブル名|概要|
|------------|-------------------------|
|test|性格診断テスト情報|
|user|登録ユーザー情報|
|contact|お問い合わせ内容の情報|
|chat|チャットルーム情報|
|community|グループ情報|
|favorite|ユーザーのいいね情報|

## 今後の課題
-  要件定義
-  設計(基本設計/詳細設計)
-  他人が見やすいコードをもっと意識
-  テストに関する知識
-  dockerを本番環境に導入
-  他人にみやすいコードをもっと意識
-  チーム開発を意識するため、branchを切ってプルリクをしてマージする機会を増やす。
-  テストに関する知識
-  自分の興味分野でのアプリ作成をもっと経験する

