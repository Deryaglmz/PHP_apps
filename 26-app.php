<?php
function ParaBirimi($Birim, $Tutar){
    if($Birim == "Türk Lirası"){
        $Kur = 1;
    }elseif($Birim == "Amerikan Doları"){
        $Kur = 4;
    }elseif($Birim == "Euro"){
        $Kur = 5;
    }else{
        $Kur = 0;
    }
    return Hesapla($Kur, $Tutar);
}
function Hesapla($KurBilgisi, $TutarBilgisi){
    $Sonuc = $KurBilgisi * $TutarBilgisi;
    echo "Girilen tutarın TL karşılığı : " . $Sonuc;
}
ParaBirimi("Amerikan Doları", 1000);


//&
$Bir = "Volkan Alakent";
function aaaaa($Bir){
    $Bir = "Merhaba benim adım" . $Bir;
    echo $Bir . "<br>";
}
aaaaa($Bir);
echo $Bir;

$Iki = "Volkan Alakent";
function bbbbb(&$Iki){
    $Bir = "Merhaba benim adım" . $Iki;
    echo $Bir . "<br>";
}
bbbbb($Iki);
echo $Iki;



function Islem($MaksimumTksitSiniri=0){
    echo"Kredi kartı ile tek çekimli sepet tutarı : 1.000<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 2 çekimli sepet tutarı : 1.010<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 3 çekimli sepet tutarı : 1.020<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 4 çekimli sepet tutarı : 1.030<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 5 çekimli sepet tutarı : 1.040<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 6 çekimli sepet tutarı : 1.050<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 7 çekimli sepet tutarı : 1.060<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 8 çekimli sepet tutarı : 1.070<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 9 çekimli sepet tutarı : 1.080<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 10 çekimli sepet tutarı : 1.090<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 11 çekimli sepet tutarı : 1.100<br>";
    if($MaksimumTksitSiniri== 0){
        return;
    }
    echo"Kredi kartı ile 12 çekimli sepet tutarı : 1.110<br>";
  } 
Islem(4);



$Calistir = " Deneme";
function Deneme(){
    echo"Derya";
}
Deneme();



$Calistir = " Deneme2";
function Deneme2($Deger){
    echo $Deger;
}
$Calistir("Derya");


//otomatik çalışan fonksiyonlar
($IslemYap = function(){
    echo "Derya";
})();



($IslemYap = function($Isim, $Soyisim){
    echo $Isim . " " . $Soyisim;
})("Derya", "Gülmez");


//recursive fonksiyon
function IslemYap2($Sayi){
    if($Sayi <= 25){
        echo $Sayi . "<br>";
        IslemYap2($Sayi+1);
    }
}
IslemYap2(1);


//static fonksiyonlar
function Bir(){
    static $Rakam = 0;
    $Rakam = $Rakam+1;
    echo "Sayı değeri : " . $Rakam . "<br>";
}
Bir();
Bir();
Bir();
Bir();


//yield
function Islem2($Baslangic, $Bitis) {
    while ($Baslangic <= $Bitis) {
      yield $Baslangic;
      $Baslangic++;
    }
  }

$Sonuc = Islem2(1, 100);
foreach ($Sonuc as $Deger) {
  echo $Deger . " "; 
}
echo"<br>";


//iç içe çok boyutlu fonksiyonlar
function Bir1(){
  function Iki(){
    echo"İki  adımdaki fonksiyonun içerisi";
  }
  echo"İlk adımdaki fonksiyonun içerisi";
}
Bir1();
Iki();



function Bir2($IsimBir, $SoyisimBir){
  function Iki2($IsimIki, $SoyisimIki){
    function Uc2($IsimUc, $SoyisimUc){
      echo $IsimUc ." " . $SoyisimUc;
    }
    Uc2($IsimIki, $SoyisimIki);
  }
  Iki2($IsimBir, $SoyisimBir);
}
Bir2("Volkan", "Alakent");
?>