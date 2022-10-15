<?php
mb_internal_encoding("utf8");

//セッションスタート
session_start();

//DB接続・try catch文
try{
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;,"root","")
}catch(PDO Exception $e){
    die("<p>申し訳ございません。現在サーバーが混み合っており一時的にアクセスが出来ません。<br>しばらくしてから再度ログインしてください。</p>
    <a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>"
);
}


//prepareステートメント(update)でSQLをセット$ //bindValueメソッドでパラメータをセット
$pdo->exec("insert into contactform(name,mail,password,path_filename,comments")values('".$_POST['name']."','"'.$POST['mail']."''".$_POST,'".$_POST['password']."','"$_POST['path_filename']."','".$_POST['comments']."');");


//executeでクエリを実行
$stmt->execute();

//prepareステートメント（更新された情報をDBからselect文で取得）でSQLをセット $//bindValueメソッドでパラメータをセット

$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail']);
$stmt->bindValue(3,$_POST['password']);
$stmt->bindValue(4,$_POST['path_filename']);
$stmt->bindValue(5,$_POST['comments']);

//executeでクエリを実行
$stmt->execute();


//データベースを切断
$pdo = NULL;

//fetch・while文でデータ取得し、sessionに代入

$_SESSION['id']=$row['id']
$_SESSION['name']=$row['name']
$_SESSION['mail']=$row['mail']
$_SESSION['password']=$row['password']
$_SESSION['picture']=$row['picture']
$_SESSION['comments']=$row['comments']



//mypage.phpへリダイレクト
header("Location:http://localhost/login_mypage3/mypage.php")

//mypage.phpからの導線以外は、『login_error.php』へリダイレクト

header("Location:http://localhost/login_mypage3/login_error.php")
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
    <!--このbodyの中に、マイページとして表示する部分を記述していく
    （HTMLと代入したsessionを記述。編集にはvalueを入れる。）-->

    <h1>会員情報</h1>

    <p>こんにちは！<?php echo $_SESSION['name'];>さん</p>

    <div class="name">
    <label>氏名</label><br>
    <input type="text" class="formbox" size="40" name="name" value = "{?php if( !empty($_POST['name']) ){?php echo $_POST['name'];}}">
    </div>

    <div class="mail">
    <label>メールアドレス</label><br>
    <input type="text" class="formbox" size="40" name="mail" value = "{?php if( !empty($_SESSION['mail']) ){?php echo $_SESSION['mail'];}}">
    </div>

    <div class="password">
    <label>パスワード</label></label><br>
    <input type="password" class="formbox" size="40" name="password" value = "{?php if( !empty($_SESSION['password']) ){?php echo $_SESSION['password'];}}">
    </div>

    <div class="password">
    <label>パスワード確認</label></label><br>
    <input type="password" class="formbox" size="40" name="confirm" value = "{?php if( !empty($_SESSION['password']) ){?php echo $_SESSION['password'];}}">
    </div>

    <div class="picture">
    <label>プロフィール写真</label><br>
    <input type="hidden" name="max_file_size" value="1000000"/>
    <input type="file" size="40" name="picture">
    </div>

    <div class="comments">
    <label>コメント</label><br>
    <textarea rows="5" cols="45" name="comments"  value = "{?php if( !empty($_SESSION['comments']) ){?php echo $_SESSION['comments'];}}"></textarea>
    </div>
    <div class="toroku">
    <input type="submit" name="submit_button" size="35" value="登録する" />
    </div>
    </div>
    </form>
    </main>


        </body>
    </html>




