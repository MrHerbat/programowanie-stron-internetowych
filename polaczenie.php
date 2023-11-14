<?php
function connect()
{
    $login="mlesniak";
    $haslo="Herbat";
    $adres="localhost";
    $baza="mlesniak";
    $connect = mysqli_connect($adres,$login,$haslo,$baza);

    return $connect;
}
function disconnect()
{
    $connect -> close();
}
?>

