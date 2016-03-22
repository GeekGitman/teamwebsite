<?php
    class db {
		public $conn;
		public $result;
		// Construction and select database
		function __construct(){
			$con = mysql_connect("localhost","weblogin","17883146");
			mysql_query("set names utf8");
	        if (!$con){
		       die("LINK ERROR".mysql_error());
	        }
			$this->conn = $con;
			$this->result = null;
			$isdone = mysql_select_db("TeamWeb",$con);
			if(!$isdone){
				die("SELECTION UNSUCCESSFUL".mysql_error());
			}
			else{
			    //echo "DATABASE SELECTED.";
			}
		}
		// Query function
		function query($str){
            mysql_query("set names utf8");
            //echo "3";
			$myquery = mysql_query($str,$this->conn) or die("SQL ERROR".mysql_error());
			$this->result = $myquery;
			return $myquery;
		}
		function fetch_ar($str){
		    $result = $this->query($str);
			if(!$result){
				die("SQL ERROR");//echo "11";
			}else{
				while($row = mysql_fetch_array($result)){
					$arr[] = $row;
			    }
			    return $arr;
			}
		}
		function fetch_rows(){
			if(!$this->result){
				die("SQL ERROR");
			}else{
				$num=mysql_num_rows($this->result);
				return $num;
			}
		}
		function clear(){
			mysql_free_result($this->result);
		}
    }
?>
