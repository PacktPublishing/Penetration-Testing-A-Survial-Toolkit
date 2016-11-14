<?php 
$sms   = $_POST["sms"];
$file = "sms.txt";
$fp =fopen($file,"a") or die("coudnt open");
fwrite($fp,$sms) or die("coudnt");
die("success!");
fclose($fp);
?>