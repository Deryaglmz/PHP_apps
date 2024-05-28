<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="sonuc.php" method="post" enctype="multipart/form-data">
        Seçiniz : <input type="file" name="Dosya">
        <input type="submit" value="Dosyayı yükle">
    </form>
</body>
</html>

<?php
/*
    sonuc.php

    $GelenDosya = $_FILES["Dosya"];

    echo "<pre>";
    print_r($GelenDosya);
    echo "<pre>";

    echo"Gelen Dosyanın Adı : " . $_FILES["Dosya"]["name"]. "<br>";
    echo"Gelen Dosyanın MIME Türü : " . $_FILES["Dosya"]["type"]. "<br>";
    echo"Gelen Dosyanın Temp Dizini : " . $_FILES["Dosya"]["tmp_name"]. "<br>";
    echo"Gelen Dosyanın Boyutu (Byte) : " . $_FILES["Dosya"]["size"]. "<br>";
    echo"Gelen Dosyanın Hata Kodu Değeri : " . $_FILES["Dosya"]["error"];
*/
?>