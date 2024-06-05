<?php

//gettype()
$Deger = "Volkan Alakent";
$Sonuc = gettype($Deger);
echo $Deger . "<br>";
echo "Veri türü : " . $Sonuc ;


//settype()
$Deger = "Volkan Alakent";
$Sonucİlk = gettype($Deger);
echo "İçeriğin ilk hali " .  $Deger . "<br>";
echo "İlk halinin Veri türü : " . $Sonucİlk . "<br>";
settype($Deger, "boolean");
$DegerSon = gettype($Deger);
echo "İçeriğin son hali " .  $Deger . "<br>";
echo "son halinin Veri türü : " . $DegerSon . "<br>";


//veri yürlerine dönüştürme
$Deger = "5";
$Sonucİlk = gettype($Deger);
echo "İçeriğin ilk hali " .  $Deger . "<br>";
echo "İlk halinin Veri türü : " . $Sonucİlk . "<br>";
$Deger2 = (integer) "5";
$DegerSon = gettype($Deger2);
echo "İçeriğin son hali " .  $Deger2 . "<br>";
echo "son halinin Veri türü : " . $DegerSon . "<br>";


//boolval()
$Deger = 4.55;
$Sonucİlk = gettype($Deger);
echo "İçerik " .  $Deger . "<br>";
echo "Veri türü : " . $Sonucİlk . "<br>";
echo"İçerik" . boolval($Deger) ."<br>";
$DegerSon = gettype($Deger2);
echo "Veri türü : " . $DegerSon;


//declare(strict_types= 1)
declare(strict_types= 1);
function Deneme(string $Isim, string $Soyisim, int $Yas){
    $Birlestir = $Isim . " " . $Soyisim . "<br> " . $Yas;
    echo gettype($Isim) .  "<br> ";
    echo gettype($Soyisim) .  "<br> ";
    echo gettype($Yas) .  "<br> ";
    return $Birlestir;
}
$Sonuc = Deneme("Volkan", "Alakent", 38);
echo $Sonuc;


//var_dump
$Deger = array("Derya", 2024);
var_dump($Deger);


//serialize
$Bilgiler = array("Isim" => "Derya", "Soyisim" => "Alakent", "Sehir" => "Istanbul" ,"Yas" => 38);
print_r($Bilgiler);
$Sonuc = serialize($Bilgiler);
echo $Sonuc;
?>