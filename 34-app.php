<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="sonuc.php" method="post" enctype="multipart/form-data">
        Yüklenecek olan dosya : <input type="file" name="Dosya"><br>
        <input type="submit" value="Formu Gönder">
    </form>
</body>
</html>

<?php
/*
$GelenDosya = $_FILES["Dosya"];

$DosyaninAdi = $_FILES["Dosya"]["name"];
$DosyaninTuru = $_FILES["Dosya"]["type"];
$DosyaninTempAdi = $_FILES["Dosya"]["tmp_name"];
$DosyaninHataDurumu = $_FILES["Dosya"]["error"];
$DosyaninBoyutu = $_FILES["Dosya"]["size"];

$Yol = "Resimler/";

$DosyaYoluVeAdi = $Yol.$DosyaninAdi;

if(move_uploaded_file($DosyaninTempAdi,$DosyaYoluVeAdi))
{
    echo"Dosya başarıyla yüklendi.<br>";
    echo"Dosyanın Adı : " . $DosyaninAdi. "<br>";
    echo"Dosyanın Türü : " . $DosyaninTuru. "<br>";
    echo"Dosyanın geçici dizini ve adı : " . $DosyaninTempAdi. "<br>";
    echo"Dosyanın hata durumu : " . $DosyaninHataDurumu. "<br>";
    echo"Dosyanın boyutu : " . $DosyaninBoyutu. "<br>";
    echo"<img src='{$DosyaYoluVeAdi}'>";
}else{
    echo"Dosya yüklenirken hata oluştu";
}
*/
?>