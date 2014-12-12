<?php
session_start();
$userid=$_SESSION['userid'];
$elementid=$_POST['id'];
$page=$_POST['url'];
$time=date('Y-m-d H:i:s');

//Opening file in append mode
$file=fopen('clicks.csv', 'a') or exit("Unable to open file!");

//Saving the data in csv format
fputcsv($file, array($page, $elementid, $userid, $time), "\t");


fclose($file);

?>