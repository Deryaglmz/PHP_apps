<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="sonuc.php" method="get">
        Adınız Soyadınız : <input type="text" name="AdSoyad"><br>
        E-Mail Adresiniz : <input type="email" name="EmailAdresi"><br>
        Telefonunuz : <input type="text" name="Telefon"><br>
        Cinsiyetiniz : <input type="radio" name="Cinsiyet" value="Erkek">Erkek<input type="radio" name="Cinsiyet" value="Kadın">Kadın<br>
        Yaşınız : <select name="Yas">
            <option value=""></option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
        </select><br>
        <input type="submit" value="Gönder">
    </form>
</body>
</html>


<?php
/*
    sonuc.php

$GelenAdSoyadDegeri = $_GET["AdSoyad"];
$GelenEmailDegeri = $_GET["EmailAdresi"];
$GelenTelefonDegeri = $_GET["Telefon"];
$GelenCinsiyetDegeri = $_GET["Cinsiyet"];
$GelenYasDegeri = $_GET["Yas"];


echo "Adınız Soyadınız : ". $GelenAdSoyadDegeri . "<br>";
echo "E-Mail Adresiniz : ". $GelenEmailDegeri . "<br>";
echo "Telefonunuz : ". $GelenTelefonDegeri . "<br>";
echo "Cinsiyetiniz : ". $GelenCinsiyetDegeri . "<br>";
echo "Yaşınız : ". $GelenYasDegeri . "<br>";
*/
?>