# Tech.Uni SummerHack 2021

![Tech.Uni SummerHack](https://user-images.githubusercontent.com/63713624/126744501-639e7f32-0ed9-48ff-91e1-2fdee17d7830.jpg)



## プロダクト名
自動採点システム
## プロダクト説明
Tech.Uni中級者クラスの問題に対する解答を自動採点します。提出すると自動採点し、すぐに結果が出力されます。
## 使用技術
* Front-end:PHP,Blade(Laravel)
* Back-end :C,Shell
* Os       :Linux(Ubuntu 20.04)
* Database :Mysql
## UI
![スクリーンショット 2021-09-03 home画面](https://user-images.githubusercontent.com/70137236/131972678-64cedaa5-0765-4eb3-9ca3-800bd6914ace.png)


![スクリーンショット 2021-09-03 登録画面](https://user-images.githubusercontent.com/70137236/131972715-ae331e7f-704b-4bda-a4c5-a58a36c3f2a6.png)


![スクリーンショット 2021-09-03 topページ](https://user-images.githubusercontent.com/70137236/131972741-1041c191-d694-4ba6-8d98-012204b1ea08.png)


![スクリーンショット 2021-09-03 成績](https://user-images.githubusercontent.com/70137236/131972788-b4c3be72-e231-4f54-9f35-cd3522345879.png)


![スクリーンショット 2021-09-03 問題一覧](https://user-images.githubusercontent.com/70137236/131972761-99eb621d-5895-4fa1-ace7-6b408c21ef26.png)


![スクリーンショット 2021-09-03 問題](https://user-images.githubusercontent.com/70137236/131972769-be27e18e-843a-47bd-a118-06e22c370ff6.png)


![スクリーンショット 2021-09-03 結果](https://user-images.githubusercontent.com/70137236/131972896-71fade97-e678-4d20-aeb9-3733138512ed.png)


![スクリーンショット 2021-09-03 結果1](https://user-images.githubusercontent.com/70137236/131979768-acc29ca2-9d9b-42fb-a085-6acad899c125.png)



![スクリーンショット 2021-09-03 成績1](https://user-images.githubusercontent.com/70137236/131972912-0df7b90e-e41b-4d72-99ea-076079af11b8.png)

## 課題
* エラーメッセージの表示
* 入力する問題・選択できる言語が僅少
* 全問正解による完了通知
* textarea内での改行(IDEのエディタのようにしたい）
* ファイルの添付
* 数字のレイアウト
* コマンドインジェクトのセキュリティ対策

<br>

<br>

## 技術説明
テキストエリアに入力されたコードを、適した拡張子をつけたファイルに挿入します。適当な拡張子を付けたファイルをLinuxベースのC言語ファイル内でexcecv関数を用いて実行します。次にCファイルを実行したことで生成された./a.outファイルをphpのexcec関数で実行することでexcec関数の出力を第二引数で受け取ることができます。
excec関数では$cmd = 'bash 〇.sh | ./a.out' のような変数を第一引数に代入することでパイプでつないだコマンドを実行することができます。アセンブラアウトファイルの標準入力にbashファイルの出力結果が流し込まれるので、bashファイルに以下のようなコードを記述しておきます。
```bash
echo 10
echo 12 32
```
このように記述しておけば、複数行入力が可能になります。
後は第二引数で得た出力結果と解答を比べ正否を判断します。

<br>

<br>

## デザイン
競技プログラミングサイト「[Atcoder](https://atcoder.jp/)」を参考にさせて頂きました。

<br>

<br>


## 参考資料

https://atcoder.jp/

https://oswald.hatenablog.com/entry/20081208/1228697674

https://laraweb.net/tutorial/2633/

https://www.creatology.jp/unix/outin.html

https://mrkmyki.com/%e9%80%86%e5%bc%95%e3%81%8dlaravel/laravel%e3%81%a7%e3%83%ad%e3%82%b0%e3%82%a4%e3%83%b3%e4%b8%ad%e3%81%ae%e3%83%a6%e3%83%bc%e3%82%b6%e3%83%bc%e3%81%ae%e6%83%85%e5%a0%b1%e3%82%92%e5%8f%96%e5%be%97%e3%81%99%e3%82%8b

https://stackoverflow.com/questions/11990708/error-cant-connect-to-local-mysql-server-through-socket-var-run-mysqld-mysq

https://teratail.com/questions/42102

https://dixq.net/forum/viewtopic.php?t=20696
