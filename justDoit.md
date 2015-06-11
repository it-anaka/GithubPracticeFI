#Github自習メニュー

##概要

Githubを使った共同作業を実際にできるようになるまでを学ぶ。

###内容

- [ ]共有リポジトリから自分のリポジトリへのコピー
- [ ]ブランチの作成
- [ ]commitする
- [ ]Githubに変更を反映する
- [ ]pull requestを送る
- [ ]pull requestからのmerge
- [ ]競合の解決
- [ ][wip]なpull requestからのコードレビュー

***

##できるかな？

###共有リポジトリから自分のリポジトリへのコピー

1. まずはGithubにログイン
1. 共有リポジトリをフォークせよ
     ![フォークせよ](images/doit/forkme.png)

###ブランチの作成

1. 以下の要領で、Githubアプリでブランチ作成
    ![ブランチせよ](images/doit/makeBranch.png)

###commitする

1. 以下の要領で、commitする
    ![コミットせよ](images/doit/commit.png)

###Githubに変更を反映する

1. 右上の`Sync`ボタンを押す

###pull requestを送る

1. 以下の要領で、Githubのリポジトリへpull requestを送る
    ![プルリクせよ](images/doit/pullRequest_basic.png)

- 同じ対象のpull requestは１つしか出せない

###pull requestからのmerge

- 以下の要領で、pull requestをmergeあるいは却下する

1. Github上で、pull requestを確認
    ![プルリクせよ1](images/doit/pullRequest_accept01.png)

2. pull requestの詳細を確認
    ![プルリクせよ2](images/doit/pullRequest_accept02.png)

3. pull requestに対する処理を決定
    ![プルリクせよ3](images/doit/pullRequest_accept03.png)

4. pull requestをmerge
    ![プルリクせよ4](images/doit/pullRequest_accept04.png)

###競合の解決

- Githubアプリ単体では解決できない。残念
- Mecurialと同じやり方で競合解決
    - Source Tree 等と、3WayDiffツールを組み合わせて解決する

###[wip]なpull requestからのコードレビュー

1. タイトルの先頭に[wip]と書いてmasterにpull request
2. 以下の要領でコメントを書く
    ![コメントせよ](images/doit/addComment.png)

***

以上