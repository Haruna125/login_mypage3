<?php
mb_internal_encoding("utf8");

//仮保存されたファイル名で画像ファイルを取得（サーバーへ仮アップロードされたデイレクトりとファイル名）
$temp_pic_name =$_FILES["picture"]["tmp_name"];

//元のファイル名で画像ファイルを取得。事前に画像を格納する「image」という名前のフォルダを作成しておく必要あり
$original_pic_name=$_FILES["picture"]["name"];
$path_filename = './image/'.$original_pic_name;

//仮保存のファイル名を、imageフォルダに、元のファイル名で移動させる
move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>

<body>

<!--このbodyの中に、マイページとして表示する部分を記述していく（HTMLとPOSTで記述）-->

<h1>会員登録確認
<style>
text-align:center;
border-style:1px, solid green;
</style>
</h1>


<p>こちらの内容で登録してもよろしいでしょうか？
<style>
text-align:center;
</style>
</p>

<p>氏名:<?php echo $_POST['name'];></p>
<p>メール:<?php echo $POST['mail'];></p>
<p>パスワード:<?php echo $_POST['password'];></p>
<p>プロフィール写真:<?php echo $_POST['image'];></p>
<p>コメント:<?php echo $_POST['coments'];></p>



</body>
</html>