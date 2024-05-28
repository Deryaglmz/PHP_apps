<?php
    session_start();
?>

<?php
    $_SESSION["Derya"] = "Derya";
    $_SESSION["Email"] = "Derya@gmail.com ";

    echo"Derya Adıyla Tanımlı SESSİON Değeriniz : " . $_SESSION["Derya"] . "<br>";
    echo"Email Adıyla Tanımlı SESSİON Değeriniz : " . $_SESSION["Email"];
?>
