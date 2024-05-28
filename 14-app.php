<?php
    //değişken
    $Isim = "Derya";
    echo $Isim;

    //sabit
    define("Isim","Derya");
    echo Isim;

    const ISIM2 = "Derya";
    echo ISIM2;

    $Deger = "Derya";
    define("ISIM", $Deger);
    echo ISIM;

    $DegerBir = "PHP";
    $DegerIki = "BTK";
    define("CIKTI", $DegerBir . " " . $DegerIki);
    echo CIKTI;

    const ICERIK = "BTK";
    const VERI = ICERIK;
    echo VERI;

    define("ICERIK2","BTK");
    define("VERİ",ICERIK2);
    echo VERI;

    define("ICERIK3","BTK");
    const VERI2 = ICERIK;
    echo VERI2;

    $Islem = "BTK";
    define("ICERIK4", $Islem);
    const VERI4 = ICERIK4;
    echo VERI4;

    define("ISIM3","Derya");
    define("SOYISIM","Gülmez");
    define("SONUC", ISIM3 . " " . SOYISIM);
    echo SONUC;

    const ISIM4 = ("Derya");
    const SOYISIM2 = ("Gülmez");
    const SONUC4 = ISIM3 . " " . SOYISIM2;
    echo SONUC;
    
    define("ISIMSOYISIM","Derya Gulmez");
    echo ISIMSOYISIM[0] . "<br>";
    echo ISIMSOYISIM[1] ."<br>";
    echo ISIMSOYISIM[2] ."<br>";
    echo ISIMSOYISIM[3] ."<br>";
    echo ISIMSOYISIM[4] ."<br>";
    echo ISIMSOYISIM[5] ."<br>";
    echo ISIMSOYISIM[6] ."<br>";
    echo ISIMSOYISIM[7] ."<br>";
    echo ISIMSOYISIM[8] ."<br>";
    echo ISIMSOYISIM[9] ."<br>";
    echo ISIMSOYISIM[10] ."<br>";
    echo ISIMSOYISIM[11] ."<br>";
?>