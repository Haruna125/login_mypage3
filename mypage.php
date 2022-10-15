<?php
mb_internal_encoding('utf8')
session_start();

//try catch文。DBに接続できなければエラ-メッセージを表示
try{
$pdo = new PDO("mysql1:dbname=lesson01;host=localhost;","root","");
}catch(PDO Exception $e){
die("<p>申し訳ございません。現在サーバーが混み合っており一時的にアクセスが出来ません。<br>しばらくしてから再度ログインしてください。</p>
<a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>"
);
}

//prepare statement（プリペアードステートメント）でSQL文の型を作る（DBとpostデータを照合させる。select文とwhere句を使用。）
$pdo->exec("insert into contactform(name,mail,password,path_filename,comments")values('".$_POST['name']."','"'.$POST['mail']."''".$_POST,'".$_POST['password']."','"$_POST['path_filename']."','".$_POST['comments']."');");



//bindValueメソッドでパラメータをセット

$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail'])
$stmt->bindValue(3,$_POST['password']);
$stmt->bindValue(4,$_POST['path_filename']);
$stmt->bindValue(5,$_POST['comments']);


//executeでクエリを実行
$stmt->execute();


//データベースを切断
$pdo=NULL

//fetch・while文でデータを取得し、sessionに代入
   $_SESSION['id']=$row['id']
   $_SESSION['name']=$row['name']
   $_SESSION['mail']=$row['mail']
   $_SESSION['password']=$row['password']
   $_SESSION['picture']=$row['picture']
   $_SESSION['comments']=$row['comments']

//データ取得ができずに（emptyを除いて判定）sessionがなければ、リダイレクト（エラー画面へ）
if(empty($_SESSION['id']['id'])){
    header("Location:login_error.php");
}
if(!empty($POST['login_keep'])){
    $_SESSION['login_keep']= $POST['login_keep'];

}

if(!empty($SESSION['id'])&&!empty($empty($_SESSION['login_keep'])){
    setcookie('mail,$_SESSION['mail],time()+60*60*24*7);
    setcookie('password',time()-1);
    setcookie('login_keep',time()-1);
}
?>




<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
      <main>
        <div class="box">
          <h2>会員情報</h2>
        <div class="hello">
        <?php echo "こんにちは！"$_SESSION['name']."さん";?>
        </div>

        <div class="profile_pic">
        <img src="<?php echo $_SESSION['picture']; ?>">
        </div>
        <div class="basic_info">
         <p>氏名：<?php echo $_SESSION['name'];?></p>
         <p>メール：<?php echo $_SESSION['mail'];?></p>
         <p>パスワード：<?php echo $_SESSION['password'];?></p>
        </div>

        <div class="comments">
        <?php echo $_SESSION['comments'];?>
        </div>
        <form action="mypage_hensyu.php" method="post" class="form_center">
        <input type="hidden" value = "<?php echo rand(1,10);?>" name="form_mypage">
        <div class="hensyubutton">
          <input type="submit" class="submit_button" size = "35" value="編集する">
        </div>
        </form>
        </div>
      </main>
      <footer>
      ©︎ 2018 InterNous.inc All rights reserver
      </footer>


    </body>
</html>


