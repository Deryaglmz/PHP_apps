<?php 
    namespace Projeler;
?>

<?php 

    $SatirNumarasi = __LINE__;
    echo "İlgili kodun bulunduğu satır numarası : " . $SatirNumarasi . "<br>";

    $Dizin = __DIR__;
    echo "Dizin : " . $Dizin ."<br>";

    $TamDosyaYolu = __FILE__;
    echo "Tam dosya yolu : " . $TamDosyaYolu ."<br>";

    function Deger(){
        echo "Fonksiyon ismi : ". __FUNCTION__ ."<br>";
    }
    Deger();

    class DegerBir{
        function Deneme(){
            echo "Class ismi : ". __CLASS__ ."<br>";
        }
    }
    $Islem = new DegerBir;
    $Islem->Deneme();


    class BTK{
        function Ders1(){
            echo  __METHOD__ ."<br>";
        }
        function Ders2(){
            echo  __METHOD__ ."<br>";
        }
    }
    $Islem = new BTK;
    $Islem->Ders1();
    echo "<br>";
    $Islem->Ders2();


    trait OzellikBir{
        function YazBir(){
            echo __TRAIT__;
        }
    }
    trait OzellikIki{
        function YazIki(){
            echo __TRAIT__;
        }
    }
    class Egitim{
        use OzellikBir;
        use OzellikIki;
    }
    $Islem = new Egitim;
    $Islem->YazBir();
    echo "<br>";
    $Islem->YazIki();

    $Sonuc = __NAMESPACE__;
    echo $Sonuc;
?>