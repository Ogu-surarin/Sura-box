<?php
session_start();

$check_user_name =$_POST["userName"];
$_SESSION['user_name'] = $check_user_name;

$check_user_nameSUB = $_POST["userNameSUB"];
$_SESSION['user_nameSUB'] = $check_user_nameSUB;

$check_user_sex = $_POST["userSex"];
$_SESSION['user_sex'] = $check_user_sex;

$check_user_birth = $_POST["userBirth"];
$_SESSION['user_birth'] = $check_user_birth;

$check_user_age = floor((date('Ymd') - date('Ymd', strtotime($check_user_birth)))/10000);
$_SESSION['user_age'] = $check_user_age;

$check_user_address = $_POST["userAddress"];
$_SESSION['user_address'] = $check_user_address;

$check_user_house = $_POST["userHouse"];
$_SESSION['user_house'] = $check_user_house;

$check_user_fam_member = $_POST["userFamilymember"];
$_SESSION['user_fam_member'] = $check_user_fam_member;

$check_user_fam_composition = $_POST["userFamilyComposition"];
$_SESSION['user_fam_composition'] = $check_user_fam_composition;
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
        <p>以下の内容で登録しますか？</p>
        <form method="post" action="DB_form_3-2.php">
            <table>
                <tr>
                    <td>　　　名前：</td>
                    <td name="userName_C">
                        <?php
                        echo $check_user_name;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>　フリガナ：</td>
                    <td name="userNameSUB_C">
                        <?php
                        echo $check_user_nameSUB;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>　　　性別：</td>
                    <td name="userSex_C">
                        <?php
                        echo $check_user_sex;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>　生年月日：</td>
                    <td name="userBirth_C">
                        <?php
                        echo $check_user_birth;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>　　　年齢：</td>
                    <td name="userAge_C">
                        <?php
                        echo $check_user_age.'歳';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>　　居住区：</td>
                    <td name="userAddress_C">
                        <?php
                        echo $check_user_address;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>住居タイプ：</td>
                    <td name="userHouse_C">
                        <?php
                        echo $check_user_house;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>　世帯人数：</td>
                    <td name="user_fam_member_C">
                        <?php
                        echo $check_user_fam_member.'人';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>　世帯構成：</td>
                    <td name="user_fam_composition_C">
                        <?php
                        echo $check_user_fam_composition;
                        ?>
                    </td>
                </tr>
            </table>
            <br/>
            <input type="submit" value="はい" name="create_check">
            <input type="button" onclick="window.history.back();" value="変更する">
        </form>
        <hr/>
        <a href="DB_form.html">TOPへ</a>
    </body>
</html>
