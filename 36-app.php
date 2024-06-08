<?php

//*
$Icerik = "Merhaba - ben -- Derya PHP --- çalışıyorum. PHP ----- eğitimini BTK'dan -- izliyorum.";
$Desen = "/-*/";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//
$Icerik = "Merhaba - ben -- Derya PHP --- çalışıyorum. PHP ----- eğitimini BTK'dan -- izliyorum.";
$Desen = "/-?/";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//()
$Icerik = "Merhaba - ben -- Derya PHP --- çalışıyorum. PHP ----- eğitimini BTK'dan -- izliyorum.";
$Desen = "/(Der)ya/";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//(x|y)
$Icerik = "Merhaba - ben -- Derya PHP --- çalışıyorum. PHP ----- eğitimini BTK'dan -- izliyorum.";
$Desen = "/(çalışı|izli)yorum/";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//(?:)
$Icerik = "Merhaba ben Hakan PHP çalışıyorum. Hasan Alakent.";
$Desen = "/Ha(?:kan | run)/";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//(\)
$Icerik = "11 + 111 işleminin sonucu 122'dir";
$Desen = "/\+/";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//[abc]
$Icerik = "Merhaba ben Hakan PHP çalışıyorum. Hasan Alakent.";
$Desen = "/[va]/i";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//[x-y]
$Icerik = "Merhaba ben Hakan PHP çalışıyorum. Hasan Alakent.";
$Desen = "/[k-m]/i";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//^
$Icerik = "Merhaba ben Hakan PHP çalışıyorum. Hasan Alakent.";
$Desen = "/[^a-zA-Z]/u";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//:
$Icerik = "Merhaba ben Hakan PHP çalışıyorum. Hasan Alakent.";
$Desen = "/:./";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//\w
$Icerik = "Merhaba ben Hakan PHP çalışıyorum. Hasan Alakent. 1 + 4 * sonucu 21'dir.";
$Desen = "/\w/u";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//\W
$Icerik = "Merhaba ben Hakan PHP çalışıyorum. Hasan _ Alakent. 1 + 4 * sonucu 21'dir.";
$Desen = "/\W/u";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//\d
$Icerik = "Volkan Alaknet 1980 doğumludur.";
$Desen = "/\d/u";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//\D
$Icerik = "Volkan Alaknet 1980 doğumludur.";
$Desen = "/\D/u";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//\s
$Icerik = "Volkan Alaknet 1980 doğumludur.";
$Desen = "/\s/";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


//\S
$Icerik = "Volkan Alaknet 1980 doğumludur.";
$Desen = "/\S/u";
preg_match_all($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";


$Icerik = "Volkan Alaknet";
$Desen = "/(?<Isim>Volkan) (?<Soyisim>Alakent)/";
preg_match($Desen, $Icerik, $match);
echo"<pre>";
print_r($match);
echo"<pre>";
?>