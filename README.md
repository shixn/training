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


# 流れ
基本的には[リンク](https://devcenter.heroku.com/articles/fork-app)に従いfork-appすれば良い。
ただし、これだと`git push staging master`としなければならず、masterブランチの内容しかherokuの環境に反映できない。
そこで[こちらのリンク](https://devcenter.heroku.com/articles/multiple-environments)に従い、`git push staging development:master`とすることで、ローカルのdevelopmentブランチをstagingリモートのmasterブランチにアップロードすることができる。

# forkされる内容
- DB
- webアプリ
- 環境変数

# 料金
ドキュメントに、fork環境を作成することで料金が増加する旨の記述はない。
- fork元の料金プランがfork先にも当てはめられる
- fork数の制限の記載なし
というところから、free dynoのweb/DBをforkしても無料だと思われる。
有料dynoをforkしたら、fork先も有料になるのでfork後すぐに無料に変更すると良い。

# レビュー環境構築自動化
できないと思われる。コンソールでdeployのページを見ると、GitHubとつないで自動デプロイする設定が一つしか設定できないので無理だと思う。
プルリク作成時に、環境をforkするフローで運用することで対応すべき事項だと考える。