<?php 
    include_once(__DIR__."/../config/include_php.php");
    $mydb=new db();
    $str="select name from Usr_info where id=".$_SERVER['PHP_AUTH_USER'];
    $str1="select credits from Usr_info where id=".$_SERVER['PHP_AUTH_USER'];
?>
    <html>
    <title>main page</title>
    <body>
        <center>In session now : <?php $re=$mydb->fetch_ar($str);echo($re[0][0]);?></center>
        <center><h3><span class="label label-danger">Your credits : <?php $re=$mydb->fetch_ar($str1);echo($re[0][0]);?></span></h3></center><br>
        <div class="container">
        <div class="list-group" width=30%>
          <li class="list-group-item list-group-item-success"><center>NAVIGATION BARS</center></li>
          <a href="http://www.baidu.com" class="list-group-item" target="content"><h4>Activities and Notifications</h4></a>
          <a href="#" class="list-group-item" target="content"><h4>Group Files Sharing</h4></a>
          <a href="#" class="list-group-item" target="content"><h4>Calculations & Figuring</h4></a>
          <a href="#" class="list-group-item" target="content"><h4>Send Mails to Others</h4></a>
          <a href="#" class="list-group-item" target="content"><h4>Personal Wiki & Blogs</h4></a>
        </div>
        </div>
        <?php include_once(__DIR__."/../config/include_js_css.php");?>
    </body> 
    </html>
