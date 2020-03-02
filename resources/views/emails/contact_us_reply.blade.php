<!DOCTYPE html>
<html lang="ja">
<style>
  body {
    background-color: #fffacd;
  }
  #button {
    width: 200px;
    text-align: center;
  }
  #button a {
    padding: 10px 20px;
    display: block;
    border: 1px solid #2a88bd;
    background-color: #FFFFFF;
    color: #2a88bd;
    text-decoration: none;
    box-shadow: 2px 2px 3px #f5deb3;
  }
  #button a:hover {
    background-color: #2a88bd;
    color: #FFFFFF;
  }
</style>
<body>

<p>
  {{$name}}さま
</p>

<p>
SUMAMOへのお問い合わせ誠にありがとうございます。    
</p>
<p>以下の内容で、問い合わせを受け付けました。通常1営業日以内にお返事をいたします。</p>
<p>
<br>
【お問い合わせ内容】
</p>
<p>
  {{$text}}
</p>
<p>
<br>

</p>
----------------------------------------------<br>
SUMAMO株式会社<br>
TEL: 03-1111-1111<br>
Email: info@sumamo.com<br>
Homepage: https://sumamo.co.jp<br>
----------------------------------------------<br>
<p id="button">
  <a href="https://sumamo.co.jp">スマートホーム最新情報</a>
</p>
</body>
</html>