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
* 画像の変更も分かりやすく比較可能
***

###コードレビューで達成したいもの
* コードを読み書きする能力の向上
	* JavaScript(altJS)やCSS(altCSS)力の向上も
	* もっと早く、もっと大きく「育ち・育てる環境」の構築
* 製品の品質・安全性の向上

***

##■Githubアカウント登録

##■Githubアプリインストール

このあたりは、もうお済みですね？

##■Githubからリポジトリをクローン

* ここからclone
https://github.com/hidk/GithubPracticeFI.git

***

##■Githubフロー

###概要
* masterブランチ = 本番と完全一致。お触り禁止
* 名前付きブランチ = 作業中ブランチ
* 本番リリース = masterブランチへのpull request
* 要するにこんな感じ
	[Gitブランチを使いこなすgit-flow／GitHub Flow入門（終）：プルリクエスト／レビューを取り込んだ、よりシンプルなGitHub Flowの運用を図解する (1/2) - ＠IT](http://www.atmarkit.co.jp/ait/articles/1401/21/news042.html)

***

###開発の流れ
1. masterから新しいブランチを作成
2. 新しいブランチでどんどんcommit  & 適宜sync
3. masterに対してpull request
    * [wip]ではじまるコメントなら、マージせず、全員でレビュー
        * wip = Work In Progress
    * リリース用のpull request
        * リリース担当がレビューして、merge
4. リリース担当が、現行のmercurialのリリース用リポジトリにpush
5. 開発に使ったリポジトリを切り離す

***
###Githubフロー備考
* 基本的に制作も開発も同じフローで作業する
* リリース用のpull requestを出す前に、以下を確認のこと
	* バグがない(テスト大事)
	* master にマージ可能(masterからマージしておく)

***
###コミットメッセージ書式

1. `#Redmineチケット番号` (空白) 内容を完結に
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

##■Github懸念点
* リポジトリサイズが1GBを超えると、もう少し控えめにしてくれと、要請されるらしい
	* Githubが大容量ファイル拡張を近々正式サポートする予定なのでそれまで耐える方針
	* どうしようもない場合は、Githubクローンを使うか？ → GitLab, GitBucket
		* 使うとしたらGitLabが有望。ただしある程度「黒い窓」と仲良くなる必要あり
***

##■Githubの導入
* mercurial管理 → github管理へ切り替える
* 自習会・勉強会で、Githubフローが問題なく利用できるようになるまで練習を
* 2015年6月後半から7月くらいが目処

***

おしまい

さっそく練習しましょう

今回の砂場
https://github.com/hidk/GithubPracticeFI.git
