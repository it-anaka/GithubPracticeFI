#Github 導入に向けて

***
##このドキュメントについて

* 下記アプリを使うと、プレゼンテーションモードで表示できます。
	[Haroopad - The Next Document processor based on Markdown](http://pad.haroopress.com/)
	* WindowsでもMacでもOK

***

##■なぜGithubを使うのか？
* コードレビューが圧倒的にやりやすい
    * pull requestを使ったフロー
    * 書きたい場所にすぐ書けるコメントツール

***

## コードレビューで達成したいもの

* コードを読み書きする能力の向上
* コードの品質・安全性の向上
* → もっと早く、もっと大きく「育ち・育てる環境」の構築

***

##■Githubアカウント登録

##■Githubアプリインストール

このあたりは、もうお済みですね？

##■Githubからクローン

* ここからclone
https://github.com/hidk/GithubPracticeFI

***

##■Githubフロー

###概要
* masterブランチ = 本番と完全一致
* 名前付きブランチ = 作業中ブランチ
* 本番リリース = masterブランチへのpull request
* 要するにこんな感じ
	[Gitブランチを使いこなすgit-flow／GitHub Flow入門（終）：プルリクエスト／レビューを取り込んだ、よりシンプルなGitHub Flowの運用を図解する (1/2) - ＠IT](http://www.atmarkit.co.jp/ait/articles/1401/21/news042.html)

***

###開発の流れ
1. masterから新しいブランチを作成
2. 新しいブランチでどんどんcommit  & 適宜sync
3. masterに対してpull request
    * [wip]ではじまるコメントなら、マージはしない
        * wip = Work In Progress
        * 開発者全員で意見を出す。意見を読む
    * リリース用のpull request
        * リリース担当がレビューして、merge
4. リリース担当が、現行のmercurialのリリース用リポジトリにpush

***
###Githubフロー備考

* 簡単な修正なら直接masterを修正してpull requstを出す手もあり
* 基本的に制作も開発も同じフローで作業する
* リリース用のpull requestを出す前に、以下を確認のこと
	* バグがない(テスト大事)
	* master にマージ可能(masterをマージしておく)

***
###コミットメッセージ書式

1. #Redmineチケット番号 (空白) 内容を完結に
2. (空行)
3. 詳細内容。なぜそれをするのか？

***
###コミットメッセージ例
```
#9999 ◯順ソート機能の修正

DBのレプリケーションにより、ソート結果
にずれが出ていた。そこで、レプリケーシ
ョンが完了するのを待つように処理を変更
した。

```
***

###Githubフローで行わないようになること
* scpやftpで直接ファイルをアップロードする
* masterブランチにpush

***

##■Githubの導入
* mercurial管理 → github管理へ切り替えます
* 自習会・勉強会でGithubフローが問題なく利用できるようになるまで練習します
* 2015年6月後半から7月くらいが目処
***

おしまい

さっそく練習しましょう

今回の砂場
https://github.com/hidk/GithubPracticeFI
