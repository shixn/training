# training用 のリポジトリです
単純なgitのtrainingだけではなく、

* herokuとの繋ぎこみテスト
* circleCIの適用テスト

といったgithubとの連携サービスのテストも兼ねています。

## 参考サイト
[bundle install の箇所の記述](https://www.philosophyguides.org/howto/automated-testing-github-pages-with-circle-ci/)

* heroku ignore について調べる

* dependencies: pre: で Gemfile をヒアドキュメントにて作成
* テスト後に 該当ファイルを rm する (要検証, 入れておいた方が安全)
* merge した後にデプロイ されるので、検証用の何かを設ける
* 各ブランチの検証用のヘロクのアプリを立てておいて、各環境で検証できる様にする