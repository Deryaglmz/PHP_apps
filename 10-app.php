<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="sonuc.php" method="get">
        İsim : <input type="text" name="Isim"><br>
        Soyisim : <input type="text" name="Soyisim"><br>
        <input type="submit" value="Bilgileri Gönder">
    </form>
</body>
</html>

<?php
/*
    sonuc.php

    $GelenIsimDegeri = $_REQUEST["Isim"];
    $GelenSoyisimDegeri = $_REQUEST["Soyisim"];

    echo $GelenIsimDegeri. " " . $GelenSoyisimDegeri;
*/
?>