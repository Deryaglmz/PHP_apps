
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- POST , GET, REQUEST-->
    <form action="sonuc.php" method="get">
        İsim : <input type="text" name="Isim"><br>
        Soyisim : <input type="text" name="Soyisim"><br>
        <input type="submit" value="Gönder">
    </form>

<?php
/*
    sonuc.php

$GelenIsimDegeri = $_GET["Isim"] ?? "Hata";
$GelenSoyisimDegeri = $_GET["Soyisim"]?? "Hata";

echo $GelenIsimDegeri. " " . $GelenSoyisimDegeri;
*/
?>

</body>
</html>
