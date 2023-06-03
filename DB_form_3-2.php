<?php
session_start();

$dbn = 'mysql:host=●●●●; dbname=●●●●';
$user = '●●●●';
$pass = '●●●●';

try {
    $dbh = new PDO($dbn, $user, $pass);
    //echo 'conecct ok';
}catch(PDOException $error){
    echo 'conecct missed '.$error->getMessage();
    die();
}

$user_name = $_SESSION['user_name'];
$user_nameSUB = $_SESSION['user_nameSUB'];
$user_sex = $_SESSION['user_sex'];
$user_birth = $_SESSION['user_birth'];
$user_age = $_SESSION['user_age'];
$user_address = $_SESSION['user_address'];
$user_house = $_SESSION['user_house'];
$user_fam_member = $_SESSION['user_fam_member'];
$user_fam_compostion = $_SESSION['user_fam_composition'];

$sql = "insert into ●●●● values (null, '".$user_name."', '".$user_nameSUB."', '".$user_sex."', '".$user_birth."', '".$user_age."', '".$user_address."', '".$user_house."', '".$user_fam_member."', '".$user_fam_compostion."')";
$dbh->query($sql);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="noindex,nofollow">
        <title>●●●●支店　顧客情報システム</title>
        <link rel="shortcut icon" href="" >
        <link rel="stylesheet" href="">
    </head>

    <body>
        <small>株式会社●●●●　福祉事業部●●●●支店</small>
        <h1>●●●●支店　顧客情報システム</h1>
        <hr/>
        <?php
        echo 'ok!';
        ?>
        <hr/>
        <a href="DB_form.html">TOPへ</a>
    </body>
</html>
