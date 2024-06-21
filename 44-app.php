<?php

session_start(); ob_start();
//header
header("Expires: Mon, 01 Jan 2018 00:00:00 GMT");
header("Cache-Control: non-cache");
header("Pragma: no-cache");


//trim
$Icerik = "Eğitim";
echo $Icerik . "<br>";
echo trim($Icerik, "x");


//rtrim
$Icerik = "xxEğitimxx";
echo $Icerik . "<br>";
$Sonİcerik = rtrim($Icerik, "x");
echo $Sonİcerik;


//addcslashes
$Icerik = "BTK dersleri";
$Sonİcerik = addcslashes($Icerik, "x");
echo $Sonİcerik. "<br>";


//mb_strtoupper
$Icerik = "BTK dersleri";
$Sonİcerik = mb_strtoupper($Icerik);
echo $Sonİcerik. "<br>";


//ucwords
$Icerik = "BTK dersleri";
$Sonİcerik = ucwords($Icerik);
echo $Sonİcerik. "<br>";

//mb_strlen
$Icerik = "BTK dersleri";
$Sonİcerik = mb_strlen($Icerik);
echo "İçeriğin karakter sayısı : " . $Sonİcerik. "<br>";


//strpos
$Icerik = "BTK dersleri";
$Sonİcerik = strpos($Icerik, "e");
echo $Sonİcerik. "<br>";


//substr
$Icerik = "BTK dersleri";
$Sonİcerik = substr($Icerik, 3);
echo $Sonİcerik. "<br>";


//str_split
$KarNumarasi = 1234567890123456;
echo $KarNumarasi."<br>";
$Islem = str_split($KarNumarasi, 4);
echo "İşlem yapılan kredi kartı : ";
foreach ($Islem as $Deger){
    echo $Deger. " " . "<br>";
}


//wordwrap
$Icerik = "BTK dersleri";
$Sonİcerik = wordwrap($Icerik, 3, "<br>") ;
echo $Sonİcerik. "<br>";


//str_shuffle
$Icerik = "BTK dersleri";
$Sonİcerik = str_shuffle($Icerik) ;
echo $Sonİcerik. "<br>";


//highlight_string
highlight_string('<?php phpinfo(); ?><br><?php echo "Volkan"; ?>');


//ord
$Icerik = "B";
$Sonİcerik = ord($Icerik) ;
echo $Sonİcerik. "<br>";


//iconv
$Icerik = "BTK dersleri";
$Sonİcerik = iconv("UTF-8", "ISO-8859-9",$Icerik) ;
echo $Sonİcerik. "<br>";
?>