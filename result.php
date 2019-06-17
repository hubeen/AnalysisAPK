<!DOCTYPE html>
<html>
<head>
    <title>결과 화면</title>
    <meta charset='utf-8'/>
    <link type="text/css" href="./css/result.css" rel="stylesheet" media="all">
</head>
<body>
<header>
    <div class="logo">
        <img alt="APK_logo" src="./imgs/logo.png">
    </div>
</header>
<hr class="logo_line">
<div class="infos">
    <ul class="apk_info">
<?php
    session_start();
    if(empty($_SESSION['dir'])){
        header("location: /AnalysisAPK");
    }else{
        $dir = $_SESSION['dir'];
        $name = $_SESSION['fname'];
        $pers = $_SESSION['per'];
        $pern = array_keys($pers);
        //$per_arr = file_get_contents("./json/per_en.json");
        //$per_arr = json_decode(file_get_contents('./json/per_en.json'), true);
        echo "<li class='store'>" . $_SESSION['fname'] . "</li>";
        echo "<li class='version'>" . $_SESSION['ver']."</li>";
        echo "<li class='package'>" . $_SESSION['pname']."</li>";

        //echo $_SESSION['dir'] . " </br>" . $_SESSION['fname'];
        //echo $_SESSION['ver'] . " </br>" . $_SESSION['pname'];

    }
?>
    </ul>
    <ul class="pers_info">
<?php
    //echo ($pers['RECEIVE_SMS']['danger']==false);
    $war = 0;
    $dan = 0;
    $len = count($pern);
    foreach($pern as $name){
        echo "<li class='per'>" . $name . " : " . $pers[$name]['description'] . "</li>";

        if($pers[$name]['flags']['warning'] == true){
            $war ++;
        }

        if($pers[$name]['flags']['danger'] == true){
            $dan ++;
        }
    }

   //echo "경고 : $war </br>위험 : $dan";
?>
    </ul>
    </div>
</div>
<div class="status">
<?php
    $st = 0;
    if(!($dan > 0 && $war > 0)){
        $st = 0;
    }
    
    if($war > ($len/2)-1){
        $st = 1;
    }else{
        $st = 0;
    }
    if($dan > 0 && $st == 1){
        $st = 2;
    } else{
        $st = 0;
    }

    switch($st){
    case 0:
        echo "<img class='ok' src='./imgs/happy.png'></img>";
        echo "<h3 style='color: #00ff68'>이 어플리케이션은 안전합니다.</h3>";
        break;
    case 1:
        echo "<img class='yet' src='./imgs/wow.png'></img>";
        echo "<h3 style='color: #ff7f00'>이 어플리케이션은 위험할 수도 있습니다.</h3>";
        break;
    case 2:
        echo "<img class='no' src='./imgs/angry.png'></img>";
        echo "<h3 style='color: #ff0000'>이 어플리케이션은 위험합니다!</h3>";
        break;
    }
?>
</body>
</html>
<?php
        session_destroy();
?>
