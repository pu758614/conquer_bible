<?php 
header("Content-Type:text/html; charset=utf-8");
// include_once("conf/conf.php");
include_once("lib/common.php");
// include_once("lib/db_lib.php");
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '123456789';
$dbname = 'bible';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->query("SET NAMES utf8"); 
$result = $mysqli->query("SELECT * FROM `conquer_bible_book`");
$row = $result->fetch_array(); //取一行數據　　echo
pr($row);//輸出第一個字段的值