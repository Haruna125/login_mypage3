<?php
mb_internal_encoding("utf8");

//セッションスタート
session_start();

//DB接続・try catch文

try{
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root,"");
}catch(PDO Exception $e){
    die("<p>申し訳ございません。現在サーバーが混み合っており一時的にアクセスが出来ません。<br>しばらくしてから再度ログインしてください。</p>
    <a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>"
    );
    }
}
//prepareステートメント（update）でセット$//bindValueメソッドでパラメータをセット
$stmt = $pdo->prepare{UPDATE 'contactform' SET 'name'='['name']','mail'='['mail']','age'='['age']','comments'='['comments']' WHERE 1}



//excuteでクエリを実行

$stmt->execute();

//prepareステートメント（更新された情報をDBからselect文で取得）でSQLをセット$//bindValueメソッドでパラメータをセット

$stmt = $pdo->prepare("SELECT * FROM 4eachblog_keijiban WHERE id = :id");


$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail'])
$stmt->bindValue(3,$_POST['password']);
$stmt->bindValue(4,$_POST['path_filename']);
$stmt->bindValue(5,$_POST['comments']);

//excuteでクエリを実行
$stmt->execute();
//データを切断
$pdo = NULL;

//fetch・while文でデータ取得し、sessionに代入

$_SESSION['id']=$row['id']
   $_SESSION['name']=$row['name']
   $_SESSION['mail']=$row['mail']
   $_SESSION['password']=$row['password']
   $_SESSION['picture']=$row['picture']
   $_SESSION['comments']=$row['comments']


//mypage.phpにリダイレクト

header("Location:http://localhost/login_mypage3/mypage.php")

?>