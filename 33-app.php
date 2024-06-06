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
        Hobileriniz : <br>
        <input type="checkbox" name="Hobiler[]" value="Alışveriş">Alışveriş<br>
        <input type="checkbox" name="Hobiler[]" value="Seyahat">Seyahat<br>
        <input type="checkbox" name="Hobiler[]" value="Sinema">Sinema<br>
        <input type="checkbox" name="Hobiler[]" value="Tiyatro">Tiyatro<br>
        <input type="checkbox" name="Hobiler[]" value="Yemek">Yemek<br>
        <input type="submit" value="Formu Gönder">
    </form>
</body>
</html>

<?php
/*
$GelenAdSoyad = $_POST["AdSoyad"];
$GelenHobiler = $_POST["Hobiler"];


echo "Adınız Soyadınız : ". $GelenAdSoyad . "<br>";
echo "Hobileriniz : <br>";

foreach($GelenHobiler as $Bilgiler){
    echo $Bilgiler ."<br>";
}
*/
?>