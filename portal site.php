<?php
$time = date("Y/m/d-G:i:s",time());
$name = "：名無しさん";
$message = $_POST["message"];
?>

<!DOCTYPE html>
<html>
    <head lang="ja">
        <meta charset="utf-8">
        <meta name=”viewport” content=”width=device-width,initial-scale=1″>
        <title>●●●●支店　社内システム総合サイト</title>
        
        <link rel="stylesheet" href="●●●●/●●●●.css">

        <script src="●●●●/●●●●.js"></script>
        <script>
        const slideR =()=> {
            const scr_p = document.getElementById("ul002").scrollLeft;
            document.getElementById("ul002").scrollLeft = scr_p + 250;    
        }
        const slideL =()=> {
            const scr_p = document.getElementById("ul002").scrollLeft;
            document.getElementById("ul002").scrollLeft = scr_p - 250;    
        }

        window.onload =()=> {
            const scr_H = document.getElementById("BulletinBoard").scrollHeight;
            const scr_cH = document.getElementById("BulletinBoard").clientHeight;
            document.getElementById("BulletinBoard").scrollTop = scr_H - scr_cH;
        }
        </script>
    </head>

    <body>
        <nav>
            <div id="subtitle">
                kawasaki city<br/>
                Daijob center<br/>
                Office System
            </div>
            <div id="linkbox">
                <!--jump to IS-->
                <div class="DisNoneLi">
                    <a id="IS-jump" href="●●●●/●●●●.html"></a>
                </div>
                <div class="navLink">
                    <a onclick="ClickIS()">自立相談</a>
                </div>
                <!--jump to HP-->
                <div class="DisNoneLi">
                    <a id="HP-jump" href="●●●●/●●●●.html"></a>
                </div>
                <div class="navLink">
                    <a onclick="ClickHP()">家計改善</a>
                </div>
                <!--jump to KS-->
                <div class="DisNoneLi">
                    <a id="KS-jump" href="●●●●/●●●●.html" target="blank"></a>
                </div>
                <div class="navLink">
                    <a onclick="ClickKS()">国システム</a>
                </div>
            </div>
            <a href=""><img id="PortalLogo" src="●●●●/●●●●.img"></a>
        </nav>

        <main id="FadeTag">
            <article>
                <div id="content-items">
                    <div id="videocontainer" class="">
                        <video id="video-001" src="●●●●/●●●●.mp4" autoplay controls loop muted></video>
                    </div>

                    <div id="Bordcontainer">
                        <form action="" method="POST" >
                            掲示板
                            <br/>
                            <textarea id="Comenntbox" name="message"></textarea>
                            <br/>
                            <input type="submit" class="BottomStyle" name="send" value="送信">
                            <input type="submit" class="BottomStyle" name="reload" value="更新">
                            <br/>
                            <div id="BulletinBoard">
                                <!--php-->
                                <?php
                                if(isset($_POST["send"]) === true) {
                                    $fw = fopen("●●●●/●●●●.txt", "ab");
                                    fwrite($fw, $time.$name."\n".$message."\n"."\n");
                                    fclose($fw);
                                
                                    $fr = fopen("●●●●/●●●●.txt", "r");
                                    while(!feof($fr)) {
                                        $txt = fgets($fr);
                                        echo $txt."<br/>";
                                    }
                                    fclose($fr);
                                }
                                ?>
                                <?php
                                if(isset($_POST["reload"]) === true) {
                                    $fr = fopen("●●●●/●●●●.txt", "r");
                                    while(!feof($fr)) {
                                        $txt = fgets($fr);
                                        echo $txt."<br/>";
                                    }
                                    fclose($fr);
                                }
                                ?>
                            </div>
                        </form>
                    </div>

                    <div id="SNScontainer">
                        <!--SNS link　start-->
                        <div class="SNSes" id="YoutubeLink">
                            <img id="Youtubelogo" src="●●●●/YouTube-emblem.png">youtube
                            <a id="YL-jump" href="" target="blank"></a>
                        </div>
                        <div class="SNSes" id="TwitterLink">
                            <img id="Twitterlogo" src="●●●●/Twitter-emblem.png">Twitter
                            <a id="TW-jump" href="" target="blank"></a>
                        </div>
                        <div class="SNSes" id="JobcanLink">
                            <img id="Jobcanlogo" src="●●●●/jobcan.png">Jobcan
                            <a id="JC-jump" href="" target="blank"></a>
                        </div>
                        <!--SNS link end-->
                        <div id="TQ-formbox">
                            <img id="TQ-linkicon" src="●●●●/megane.png"
                            ><!--jump to TQ-->
                            <div class="DisNoneLi">
                                <a id="TQ-jump" href="./●●●●/●●●●.php"></a>
                            </div>
                            <div class="navLink-other-1">
                                <a onclick="ClickTQ()">ツイート内容を募集中です！！！</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="OfficeLink">
                    <div id="NewsList">
                        <h1 class="Linktitle">
                            新着情報&emsp;<small>new!!</small>
                        </h1>
                        <ul id="ul001" class="ul-Link">
                            <li class="NewsList">
                                <a class="Newslink" href="●●●●/●●●●.pdf" target="blank">7月5日　朝礼---住民税非課税世帯への臨時給付金について（厚労省より）</a>
                            </li>
                            <li class="NewsList">
                                <a class="Newslink" href="●●●●/●●●●.pdf" target="blank">7月1日　夕礼---設備点検の日程</a>
                            </li>
                            <li class="NewsList">
                                <a class="Newslink" href="●●●●/●●●●.pdf" target="blank">7月1日　朝礼---住居確保給付金　市運用整理表、事務マニュアル修正</a>
                            </li>
                            <li class="NewsList">
                                <a class="Newslink" href="●●●●/●●●●.pdf" target="blank">6月30日　朝礼---　システムのアップデートの件</a>
                            </li>
                        </ul>
                    </div>
                    <div id="OfficeForm">
                        <div class="Linktitle">
                            各種システム一覧
                        </div>
                        <div id="scr_wrap">
                            <input type="button" value="◁" class="Scr_Btn" onclick="slideL()">
                            <ul id="ul002" class="ul-Link">
                                <li id="IS-list-img" class="listStyleNone">
                                    <a onclick="ClickIS()">
                                        <img class="OfficeLinkLogo" src="●●●●/●●●●.png">
                                    </a>
                                </li>
                                <li id="HP-list-img" class="listStyleNone">
                                    <a onclick="ClickHP()">
                                        <img class="OfficeLinkLogo" src="●●●●/●●●●.png">
                                    </a>
                                </li>
                                <li id="WD-list-img" class="listStyleNone">
                                    <div class="DisNoneLi"><!--jump to WD-->
                                        <a id="WD-jump" href="●●●●/●●●●.html"></a>
                                    </div>
                                    <a onclick="ClickWD()">
                                        <img class="OfficeLinkLogo" src="●●●●/●●●●.png">
                                    </a>
                                </li>
                                <li id="PS-list-img" class="listStyleNone">
                                    <div class="DisNoneLi"><!--jump to PS-->
                                        <a id="PS-jump" href="●●●●/●●●●.html"></a>
                                    </div>
                                    <a onclick="ClickPS()">
                                        <img class="OfficeLinkLogo" src="●●●●/●●●●.png">
                                    </a>
                                </li>
                            </ul>
                            <input type="button" value="▷" class="Scr_Btn" onclick="slideR()">
                        </div>
                    </div>           
                </div>
            </article>
        </main>

        <footer></footer>
    </body>
</html>
