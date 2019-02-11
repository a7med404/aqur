<?php
    session_start();
    $d = 'en';
    if(isset($_SESSION["defalut-lang"]) && $_SESSION['defalut-lang'] == "$d"){
        $_SESSION['defalut-lang'] = 'ar'; 
    }else {
        $_SESSION['defalut-lang'] = 'en'; 
    }

    $back = $_SERVER['HTTP_REFERER'];
    header("location: $back");
	exit();
?>