<?php

//Regular Expression

//preg_match
$Metin =  "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK den izliyorum.";
$Desen = "/PHP/";
preg_match($Desen, $Metin, $match);
echo "<pre>";
print_r($match);
echo "<pre>";


//preg_match_all
$Metin =  "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK den izliyorum.";
$Desen = "/PHP/";
preg_match_all($Desen, $Metin, $match);
if($match){
    echo "Aranan eşleşme bulundu";
}else{
    echo "Aranan eşleşme bulunamadı";
}


//preg_filter
$Icerik =  "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK den izliyorum.";
$Ara = array("/PHP/","/Derya/");
$Degistir = array("ASP","Cansu");
$Sonuc = preg_filter($Ara, $Degistir, $Icerik);
    echo $Icerik."<br>";
    echo $Sonuc;


//preg_split
$Icerik =  "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK den izliyorum.";
$Desen = "/ /";
$Sonuc = preg_split($Desen, $Icerik);
echo "<pre>";
print_r($Sonuc);
echo "<pre>"; 


//preg_grep
$Icerik =  array(22, 12 ,143, 82, 104);
$Desen = "/2/";
$Sonuc = preg_grep($Desen, $Icerik);
echo "<pre>";
print_r($Sonuc);
echo "<pre>";


//preg_quote
$Deger = "Merhaba Nasılsın?";
$Islem = preg_quote($Deger);
echo $Islem;


//i
$Icerik = "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK den izliyorum.";
$Desen = "/Derya/i";
preg_match_all($Desen, $Icerik, $match);
print_r($match);


//u
$Icerik = "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK den izliyorum.";
$Desen = "//u";
$Sonuc = preg_split($Desen, $Icerik);
print_r($Sonuc);


//x
$Icerik = "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK den izliyorum.";
$Desen = "/P H P/x";
preg_match($Desen, $Icerik, $match);
print_r($match);


//s
$Icerik = "Merhaba ben Derya PHP çalışıyorum.
PHP eğitimini BTK den izliyorum.";
$Desen = "/.*/s";
preg_match_all($Desen, $Icerik, $match);
print_r($match);


//^
$Icerik = "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK den izliyorum.";
$Desen = "/^PHP/";
$Sonuc = preg_match($Desen, $Icerik);
print_r($Sonuc);


//$
$Icerik = "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK den izliyorum.";
$Desen = "/PHP$/";
$Sonuc = preg_match($Desen, $Icerik);
if($Sonuc==1){
    echo" Değer içerik karakter diziliminin sonunda var";
}else{
    echo" Değer içerik karakter diziliminin sonunda yok";
}


//b
$Icerik = "Hakan , Volkan, Onur, Serkan, Ümit";
$Desen = "/kan\b/";
$Sonuc = preg_match($Desen, $Icerik);
print_r($Sonuc);


//B
$Icerik = "Hakan , Volkan, Onur, Serkan, Ümit";
$Desen = "/\Bkan/";
$Sonuc = preg_match($Desen, $Icerik);
print_r($Sonuc);


//
$Icerik = "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK'dan izliyorum.";
$Desen = "/BTK(?='dan)/i";
preg_match_all($Desen, $Icerik, $match);
print_r($match);


//
$Icerik = "Merhaba ben Derya PHP çalışıyorum. PHP eğitimini BTK'dan izliyorum.";
$Desen = "/BTK(?!'dan)/i";
preg_match_all($Desen, $Icerik, $match);
print_r($match);


//{x}
$Icerik = "Merhaba ben Derya PHP -- çalışıyorum. PHP eğitimini BTK'dan - izliyorum.";
$Desen = "/-{2}/";
preg_match_all($Desen, $Icerik, $match);
print_r($match);


//{x,}
$Icerik = "Merhaba ben Derya PHP -- çalışıyorum. PHP - eğitimini BTK'dan -- izliyorum.";
$Desen = "/-{1,}/";
preg_match_all($Desen, $Icerik, $match);
print_r($match);


//{x,y}
$Icerik = "Merhaba - ben -- Derya PHP --- çalışıyorum. PHP ----- eğitimini BTK'dan -- izliyorum.";
$Desen = "/-{1,5}/";
preg_match_all($Desen, $Icerik, $match);
print_r($match);


//{x,y}
$Icerik = "Merhaba - ben -- Derya PHP --- çalışıyorum. PHP ----- eğitimini BTK'dan -- izliyorum.";
$Desen = "/-+/";
preg_match_all($Desen, $Icerik, $match);
print_r($match);
?>