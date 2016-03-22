<?php
    require_once(__DIR__."/../config/include_php.php");
    $mydb=new db();
    if(!isset($_SERVER['PHP_AUTH_USER'])){
        echo "1";
        header("WWW-Authenticate:BASIC Realm=FRUTURE TEAM Realm");
        header("HTTP/1.0 401 Unauthorized");
        echo "ACCESS DENIED";
        exit;
    }
    else{
        $user=$_SERVER['PHP_AUTH_USER'];
        $pwd=$_SERVER['PHP_AUTH_PW'];
        $str="select name from Usr_info where id={$user} and passwd='{$pwd}'";
        //echo "2".$str;
        $mydb->query($str);$re=$mydb->fetch_rows();
        if($re>0){
            echo $user." PASS AUTHORIZED";
            header("Location: main.html");
            exit;
        }
        else{
            echo "PASSWORD/ACCOUNT ERROR".$str;
            header("WWW-Authenticate:BASIC Realm=FRUTURE TEAM Realm");
            header("HTTP/1.0 401 Unauthorized");
            echo "PASSWORD/ACCOUNT ERROR";
            exit();
        }
    }
?>
