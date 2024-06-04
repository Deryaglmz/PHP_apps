<?php
function Btk_Akademi_Dersleri(){
    echo"Eğitim - BTK";
}
Btk_Akademi_Dersleri();

$Isim = "Volkan Alakent";
function Yaz(){
    global $Isim;
    echo $Isim;
}
Yaz();


$Isim = "Volkan ";
$Soyisim = "Alakent";
function Yazi(){
    global $Isim;
    global $Soyisim;
    echo $Isim . $Soyisim;
}
Yazi();


//anonim fonksiyon
$Yazdir = function(){
    echo"Eğitim kanalı";
};
$Yazdir();


$Islem = array(
    "Volkan",
    "Hakan",
    function(){
        echo"Eğitim";
    },
    "Onur",
);
echo $Islem[0] . "<br>";
echo $Islem[1] ."<br>";
$Islem[2]();
echo "<br>";
echo $Islem[3];


$Deger = "Volkan";
if($Deger=="Volkan"){
    function Yaz1(){
        echo "Mehhaba Volkan";
    }
}else{
    function Yaz1(){
        echo "Volkan Alakent";
    }
}
Yaz1();


//return
function Islem2(){
    $IsimSoyisim = "Volkan Alakent";
    return $IsimSoyisim;
}
$Sonuc = Islem2();
echo $Sonuc;


function Islem3(){
    $IsimSoyisim = "Volkan Alakent";
    return ($IsimSoyisim);
}
$Sonuc = Islem3();
echo $Sonuc;


function Islem4(){
    $Isim = "Derya";
    $Soyisim = "Gülmez";
    $Sehir = "İstanbul";
    $Yas = 22;
    $Meslek = "Yazılımcı";

    return array($Isim, $Soyisim, $Sehir, $Yas , $Meslek);
}$Sonuc = Islem4();
echo "<pre>";
print_r($Sonuc);
echo "<pre><br>";


//fonksiyonda parametre
function IslemYap($Isim,$Soyisim){
    echo $Isim . " " . $Soyisim;
}
IslemYap("Derya","Gülmez");


function IslemYap3($Isim,$Soyisim,$Yas){
    echo "Gelen isim : " . $Isim ."<br>";
    echo "Gelen Soyisim : " . $Soyisim ."<br>";
    echo "Gelen Yas : " . $Yas ."<br>";
}
IslemYap3("Derya","Gülmez",22);


//func_num_args, func_get_arg, func_get_args
function Bilgiler(){
    $GelenParametreSayisi = func_num_args();
    echo "Fonksiyona gelen parametre sayısı : " . $GelenParametreSayisi;
    $GelenParametreSayisi = func_get_args();
    echo "<pre>";
    print_r($GelenParametreSayisi);
    echo "<pre><br>";
    $MeslekDegeri = func_get_arg(3);
    echo $MeslekDegeri;
}
Bilgiler("Derya", "Gülmez","İstanbul", "Yazılımcı",22, "Kadın", "derya@gmail.com")
?>