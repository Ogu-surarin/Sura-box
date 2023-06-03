<?php
ini_set('display_errors', 1);

$post_data = $_POST["userName"];

$dbn = 'mysql:host=●●●●; dbname=●●●●';
$user = '●●●●';
$pass = '●●●●';

try {
    $dbh = new PDO($dbn, $user, $pass);
    //echo 'connect clear!';
}catch(PDOException $error){
    echo 'conecct missed '.$error->getMessage();
    die();
}
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
        <table border solid>
            <tr>
                <td>id</td>
                <td>名前</td>
                <td>フリガナ</td>
                <td>性別</td>
                <td>生年月日</td>
                <td>年齢</td>
                <td>居住区</td>
                <td>住居タイプ</td>
                <td>世帯人数</td>
                <td>世帯構成</td>
            </tr>
            <!-- recoard return space -->
            <?php
            $table_columm = ['id', 'name', 'name_sub', 'sex', 'birthday', 'age', 'address', 'house_type', 'household_number', 'household_composition'];

            if(empty($post_data)){
                $sql_all = 'select * from ●●●●';
                $stmt_all = $dbh->query($sql_all);
                foreach($stmt_all as $result){
                    echo "<tr>";
                    foreach($table_columm as $val){
                        echo "<td>".$result[$val]."</td>";
                    }
                    echo "</tr>";
                }
            }else{
                $sql = 'select * from ●●●● where name='.$post_data;
                $stmt = $dbh->query($sql);

                if(empty($stmt)){
                    $message = '該当するデータはありません';
                    echo "<tr>";
                    echo "<td>".$message."</td>";
                    echo "</tr>";
                }else{
                    foreach($stmt as $result){
                        echo "<tr>";
                        foreach($table_columm as $val){
                           echo "<td>".$result[$val]."</td>";
                        }
                        echo "</tr>";
                    }
                }
            }

            ?>
        </table>
        <hr/>
        <a href="DB_form.html">TOPへ</a>
    </body>
</html>
