<?php

//class
class IsimSoyisim{
    public $isim = "Volkan";
    public $soyisim = "Alakent";
}
$Sonuc = new IsimSoyisim;
echo $Sonuc->isim . "<br>";
echo $Sonuc->soyisim . "<br>";


//class (const)
class IsimSoyisim2{
    public const ISIM = "Volkan";
    public const SOYİSİM = "Alakent";
}
$Sonuc = new IsimSoyisim2;
echo IsimSoyisim2::ISIM . "<br>";
echo IsimSoyisim2::SOYİSİM . "<br>";


//class function
class Deneme{
    public function Egitim(){
        $Sonuc = "BTK akademi dersleri";
        return $Sonuc;
    }
}
$Nesne = new Deneme;
$Metin = $Nesne->Egitim();
echo $Metin;


//
class Detay{
    public $isim = "Volkan";
    public const Soyisim = "Alakent";
    public function Bilgiler(){
        $Meslek = "Yazılımcı";
        $Sehir = "İstanbul";
        $Metin = "Mesleği : " . $Meslek . "<br> İli : " . $Sehir;
        return $Metin;
    }
}
$Sonuc = new Detay;
echo "İsim Soyisim : " . $Sonuc->isim . " " . Detay::Soyisim . "<br>". $Sonuc->Bilgiler();


//
class Deneme2{
    var $isim = "Volkan";
}
$Islem = new Deneme2;
echo $Islem->isim ."<br>";


//
class Deneme3{
    public function __construct(){
        echo"Sınıf çalıştı ve yapıcı metod devreye girdi. <br>";
    }
    public $isim = "Volkan";
    public $Soyisim = "Alakent";
    public function Yaz(){
        $Metin = "BTK akademi dersleri";
        return $Metin;
    }
    public function __destruct(){
        echo "Özellikler ve metodların çalışması tamamlandığı için yıkıcı metod devreye girdi.";

    }
}
$IslemYap = new Deneme3;
echo $IslemYap->isim. " " . $IslemYap->Soyisim . " " .$IslemYap->Yaz().  "<br>";



//
class Deneme4{
    public const ISIM = "Volkan";
    public const SOYISIM = "Alakent";
}
$Islem = new Deneme4;
echo Deneme4::ISIM . " " . Deneme4::SOYISIM;



//trait, use
trait Kisi{
    public $isim = "Volkan";
    public $soyisim = "Alakent";
    public function Tanimlar(){
        $Metin = "BTK dersleri";
        return $Metin;
    }
}
class Deneme5{
    use Kisi;
}
$Sonuc = new Deneme5;
echo $Sonuc->isim. " ";
echo $Sonuc->soyisim."<br>";
echo $Sonuc->Tanimlar()."<br>";

?>