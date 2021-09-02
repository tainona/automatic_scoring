<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <title>2-1:コマンド引数</title>
    <link href="css/problem-one.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <div class="header-logo"><a href="/home">Tech.Uni</a></div>
      <div class="header-ul">
        <ul>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>
    </header>
    <main>
      <div class="question">
        <h3>2-1: コマンド引数</h3>
      </div>
      <p>実行時間制限:2sec/メモリ制限:1024MB</p>
      <div class="problem-description">
        <h3>問題文</h3>
        コマンドライン引数で２つの数字A,Bを受け取り、前者の値が後者の何％であるか表示する。
       </div>
       <div class="constreaint">
         <h3>制約</h3>
         <p>A,Bは共に整数である。</p>
         <p>小数点以下は四捨五入。</p>
         <p>1&nbsp;&#8806;&nbsp;A&nbsp;&#60;&nbsp;B&nbsp;&#8806;&nbsp;&nbsp;100<sup></sup></p>

       </div>
      <div class="output-oneblock">
        <p>入力例１</p>
        <div class="output-result">
          <p class="child">18&nbsp;50</p>
        </div>
        <p>出力例１</p>
        <div class="output-result">
          <p class="child">36</p>
        </div>
      </div>
      <div class="output-twoblock">
        <p>入力例２</p>
        <div class="output-result">
          <p class="child">52 78</p>
        </div>
        <p>出力例２</p>
        <div class="output-result">
          <p class="child">67</p>
        </div>
      </div>
      <div class="output-threeblock">
        <p>入力例３</p>
        <div class="output-result">
          <p class="child">1 100</p>
        </div>
        <p>出力例３</p>
        <div class="output-result">
          <p class="child">1</p>
        </div>
      </div>
      <form action="{{ url('/result21')}}" method="post">
        {{ csrf_field() }}
        <div class="main-text">
          <?php
$language = array("python","ruby","javascript");
$problem = '2-1:コマンド引数';
           ?>
          <div class="select-option">
            <div class="language">
              言語
            </div>
            <select  name="select">
              <option value="未選択">選択してください</option>
              <?php
                foreach($language as $lang){
                  echo "<option  value='{$lang}'>{$lang}</option>";
                }
              ?>
            </select>
          </div>
          <p>ソースコード:</p>
          <textarea name="name"  rows="8" cols="80" spellcheck="false"></textarea>
        </div>
	<div class="main-button">
          <input type='hidden' name='problem' value='<?= $problem ?>'>
          <button type="submit" name="message">解答</button>
        </div>
      </form>
      <div class="footer">
        <a href="/problems">>問題一覧</a>
      </div>
    </main>
    <footer>
    </footer>
  </body>
</html>
