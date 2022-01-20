<?php
    $malePismenka = "";
    $velkePismenka = "";
    $ciselka = "";
    $special = "";
    $AllInput = "";
    if (isset($_GET["malePismena"]) == true) {
        $malePismenka = "abcdefghijklmnopqrstuvwxyz";
    } 
    if (isset($_GET["velkePismena"]) == true) {
        $velkePismenka = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }
    if (isset($_GET["cisielka"]) == true) {
        $ciselka = "1234567890";
    }
    if (isset($_GET["specialne"]) == true) {
        $special = "@#$%{}[]()/\,;:.<>";
    }
    $AllInput = $malePismenka . $velkePismenka . $ciselka . $special;
    $pass = array(); 
    $dlzkaInput = strlen($AllInput) - 1; 
    $dlzkaHesla = $_GET["dlzka"];
    for ($i = 1; $i <= $dlzkaHesla ; $i++) {
        $r = rand(0, $dlzkaInput); 
        $heslo[] = $AllInput[$r]; 
    }
    echo(implode($heslo));
?>