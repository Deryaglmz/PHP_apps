<?php

//setcookie
setcookie("KullaniciAdi", "Volkan");
setcookie("KullaniciSoyadi", "Alakent");
echo "Kullanici Adı" . $_COOKIE["KullaniciAdi"]. "<br>";
echo "Kullanici Soyadı" . $_COOKIE["KullaniciSoyadi"]. "<br>";


//
$YasamSuresi = time() + 3600;
setcookie("KullaniciAdi", "Volkan", $YasamSuresi);
setcookie("KullaniciSoyadi", "Alakent", $YasamSuresi);
echo "Kullanici Adı" . $_COOKIE["KullaniciAdi"]. "<br>";
echo "Kullanici Soyadı" . $_COOKIE["KullaniciSoyadi"]. "<br>";


//SESSION
$_SESSION["KullaniciAdi"] = "Volkan";
$_SESSION["KullaniciSoyadi"] = "Alakent";
$_SESSION["KullaniciEmail"] = "Volkan@gmail.com";
$_SESSION["KullaniciTel"] = "0535 225 43 43";
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

?>