#デプロイ体制案

##ブランチ構成

- master
    - 開発メインブランチ
    - ここへのcommit内容は自動でステージング環境に反映される
    - 問題なければ、deploy/productにpull requestを出して、リリースを行う
    - 問題があれば、`git revert`で取り消しcommitをする
- deploy/pruduct
    - 本番リリース用ブランチ
    - ここへのcommit内容は自動で本番に反映される
- (feature)
    - 個々の機能の開発に使うブランチ
    - 名前は様々
    - masterから分岐
    - masterにマージして、切り離す(publishしない)


##デプロイフロー（基本）

1. 開発者が自分のリポジトリからリモートのmasterにpull request
2. master管理者がmerge
3. Redmineサーバが1分毎にGithubからpull
4. masterにcommitがあれば、ステージング環境にpushしてステージングデプロイ実行
5. 特に問題が無いことを確認
5. master管理者がdeploy/productブランチにpull request
6. master管理者がdeploy/productブランチでmerge
7. Redmineサーバが1分毎にGithubからpull
8. deploy/productにcommitがあれば、Redmineサーバが本番にpushしてデプロイ実行

- 現在はデプロイをmercurialで行っているが、gitに改めたい
  - gitのコミットメッセージをコピーしてmercurialでコミットする工程が不要になる
  - Hg-Git Mercurial Plugin を使う手もある
- 将来的には本番へpushする役目をCIツールに任せたい
  - 最低限のテストをかませるフローに改める
- 制作の場合は、直接deploy/productにpull request → merge を許可する
    - masterとのズレは開発側が修正
    