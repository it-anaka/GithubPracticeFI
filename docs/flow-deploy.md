#デプロイフロー（基本）
1. 開発者が自分のリポジトリからリモートのmasterにpull request
2. master管理者がmerge
3. Redminサーバが1分毎にgitリポジトリを同期
4. masterにcommitがあれば、ステージング環境にpushしてステージングデプロイ実行
5. master管理者がdeploy/productブランチにpull request
6. master管理者がdeploy/productブランチでmerge
7. Redminサーバが1分毎にgitリポジトリを同期
8. deploy/productにcommitがあれば、本番にpushしてデプロイ実行

- 本番へpushする役目をCIツールに任せたい
  - 最低限のテストをかませるフローに改める
- デザイナーの場合は、直接でdeploy/productにpull request → merge を許可する
