<?php
    $malePismenka = "";
    $velkePismenka = "";
    $ciselka = "";
    $special = "";

    // $pismenkaMale = $_GET["malePismena"];
    // $pismenkaVelke = $_GET["velkePismena"];
    // $cisla = $_GET["cisielka"];
    // $specialne = $_GET["specialne"];
    

    // if (isset($_GET["malePismena"]) == true) {
    //     $malePismenka = "abcdefghijklmnopqrstuvwxyz";
    //     $passwdInputMale = $malePismenka ;
    // }
    // elseif (isset($_GET["malePismena"]) == false) {
    //     $malePismenka = "";
    //     $passwdInputMale = $malePismenka ;
    // }



    // if ($_GET["velkePismena"] == true) {
    //     $velkePismenka = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //     //echo $velkePismenka . "\n";
    //     $passwdInputVelke = $passwdInputMale . $velkePismenka;
    // }
    // elseif ($_GET["velkePismena"] == false) {
    //     $velkePismenka = "";
    //     $passwdInputVelke = $passwdInputMale . $velkePismenka;
    // }


    // if ($_GET["cisielka"] == true) {
    //     $ciselka = "1234567890";
    //     //echo $velkePismenka . "\n";
    //     $passwdInputCisla = $passwdInputVelke . $ciselka;
    // }
    // elseif ($_GET["cisielka"] == false) {
    //     $ciselka = "";
    //     $passwdInputCisla = $passwdInputVelke . $ciselka;
    // }


    // if ($_GET["specialne"] == true) {
    //     $special = "@#$%{}[]()/\,;:.<>";
    //     //echo $velkePismenka . "\n";
    //     $passwdInputSpecial = $passwdInputCisla . $special;
    // }
    // elseif ($_GET["specialne"] == false) {
    //     $special = "";
    //     $passwdInputSpecial = $passwdInputVelke . $special;
    // }

    //  echo $passwdInputSpecial;

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
    //echo $AllInput;
    
    // //premenne na zadavanie 
    // // $malePismenka = "abcdefghijklmnopqrstuvwxyz";
    // // $velkePismenka = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // // $ciselka = "1234567890";
    // // $special = "@#$%{}[]()/\,;:.<>";
    // // $passwdInput = $malePismenka . $velkePismenka . $ciselka . $special;

    // echo $passwdInput . "\n"; // debug

    $pass = array(); 
    $dlzkaInput = strlen($AllInput) - 1; //dlzka
    
    //echo "Dĺžka všetkých zvolených znakov" . " " . $dlzkaInput . "\n";

    $dlzkaHesla = $_GET["dlzka"]; //dlzka ako dlhe ma byt heslo
    //echo $dlzkaHesla;  
    
    for ($i = 0; $i < $dlzkaHesla ; $i++) {
        $r = rand(0, $dlzkaInput); //vyberie random hodnotu z dlzky
        $heslo[] = $AllInput[$r]; //pouzije vybranu hodnotu aby vybral zo znakou 1 a vlozi ho do premennej
    }
    echo(implode($heslo)); //implode spoji vsetky dane znaky dokopy

?>