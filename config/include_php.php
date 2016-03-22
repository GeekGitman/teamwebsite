<?php
    $dir=__DIR__."/../class/*";
    $pattern="/README/";
        foreach(glob($dir) as $file) { 
            if(!preg_match($pattern,$file)){
                include_once($file); 
                if(is_dir($file)) { 
                    fetchDir($file); 
                }
            }
        } 
    include_once(__DIR__."/../database/db.php");
    //include_once("/var/www/database/d.php");
?>
