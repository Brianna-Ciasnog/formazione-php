<?php

require_once "utenti.php";

echo "<h3> Report </h3>";
/* -------------------------------------------------------- */
/* function report($utenti) {
    foreach ($utenti as $utente) {
        echo $utente["nome"] . "<br>";
    }
} */
/* -------------------------------------------------------- */
/* report($utenti); */
/* Conto degli utenti */
$numeroUtenti=count($utenti);
echo "Numero Totale di utenti: ".$numeroUtenti. "<br/>"; 
/* -------------------------------------------------------- */
/*Media del età */
/* echo "La Media del età: ". array_sum($utenti[$eta]) . "<br/>";  che non funziona perche ovviamente lui cazzo ne sa di dove la collona*/
$eta = array_column($utenti, 'eta');// percio prendo la collona 
$sommaEta = array_sum($eta); //uso la somma
$media = $sommaEta / $numeroUtenti; //e faccio la media con la variabile che ho gia
echo "La Media del età: ". $media . "<br/>";
/* -------------------------------------------------------- */
/*Utenti maggioreni  */
function utentiMaggioreni($utenti) {
    $count = 0;
    foreach ($utenti as $utente) {
        if ($utente["eta"] >= 18) { 
            $count++;
        }
    }
    echo "Numero di utenti maggiorenni: " . $count . "<br/>";
}
utentiMaggioreni($utenti,$eta);
/* -------------------------------------------------------- */
/*Utenti divisi per citta */
/* $citta = array_column($utenti, 'citta'); */
$utentiPerCitta=[];
/*      foreach ($utenti as $utente) {
        if ($utente["citta"]) { 
            echo "neko <br/>";
        }
    } */