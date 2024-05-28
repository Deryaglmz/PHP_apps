<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="sonuc.php" method="post">
        İsim : <input type="text" name="Isim"><br>
        Soyisim : <input type="text" name="Soyisim"><br>
        <input type="submit" value="Gönder">
    </form>
</body>
</html>

<?php
/*
    sonuc.php

    $GelenIsimDegeri = $_POST["Isim"];
    $GelenSoyisimDegeri = $_POST["Soyisim"];

    echo $GelenIsimDegeri. " " . $GelenSoyisimDegeri;
*/
?>