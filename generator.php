<?php
    $malePismenka = "";
    $velkePismenka = "";
    $ciselka = "";
    $special = "";
    // $pismenkaMale = $_GET["malePismena"];
    // $pismenkaVelke = $_GET["velkePismena"];
    // $cisla = $_GET["cisielka"];
    // $specialne = $_GET["specialne"];

    if ($_GET["malePismena"] == true) {
        $malePismenka = "abcdefghijklmnopqrstuvwxyz";
        $passwdInputMale = $malePismenka ;
    } elseif ($_GET["malePismena"] == false) {
        $malePismenka = "";
        $passwdInputMale = $malePismenka ;
    }
    if ($_GET["velkePismena"] == true) {
        $velkePismenka = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        //echo $velkePismenka . "\n";
        $passwdInputVelke = $passwdInputMale . $velkePismenka;
    }elseif ($_GET["velkePismena"] == false) {
        $velkePismenka = "";
        $passwdInputVelke = $passwdInputMale . $velkePismenka;
    }

    echo $passwdInputVelke;
    
    // //premenne na zadavanie 
    // // $malePismenka = "abcdefghijklmnopqrstuvwxyz";
    // // $velkePismenka = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // // $ciselka = "1234567890";
    // // $special = "@#$%{}[]()/\,;:.<>";
    // // $passwdInput = $malePismenka . $velkePismenka . $ciselka . $special;

    // echo $passwdInput . "\n"; // debug

    // $pass = array(); 
    // $dlzkaInput = strlen($passwdInput) - 1; //dlzka
    
    // echo "Dĺžka všetkých zvolených znakov" . " " . $dlzkaInput . "\n";

    // $dlzkaHesla = $_GET["dlzka"]; //dlzka ako dlhe ma byt heslo
    // echo $dlzkaHesla;  
    
    // for ($i = 0; $i < $dlzkaHesla ; $i++) {
    //     $r = rand(0, $dlzkaInput); //vyberie random hodnotu z dlzky
    //     $heslo[] = $passwdInput[$r]; //pouzije vybranu hodnotu aby vybral zo znakou 1 a vlozi ho do premennej
    // }
    // echo(implode($heslo)); //implode spoji vsetky dane znaky dokopy

?>