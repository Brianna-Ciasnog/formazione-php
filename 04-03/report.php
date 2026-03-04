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
echo "<h3>Numero Utenti</h3>";
$numeroUtenti = count($utenti);
echo "Numero Totale di utenti: " . $numeroUtenti . "<br/>";
/* -------------------------------------------------------- */
/*Media del età */
echo "<h3>Media delle eta generale</h3>";
/* echo "La Media del età: ". array_sum($utenti[$eta]) . "<br/>";  che non funziona perche ovviamente lui cazzo ne sa di dove la collona*/
$eta = array_column($utenti, 'eta'); // percio prendo la collona 
$sommaEta = array_sum($eta); //uso la somma
$media = $sommaEta / $numeroUtenti; //e faccio la media con la variabile che ho gia
echo "La Media del età: " . $media . "<br/>";
/* -------------------------------------------------------- */
/*Utenti maggioreni  */
echo "<h3>Utenti Maggiorenni</h3>";
function utentiMaggioreni($utenti)
{
    $count = 0;
    foreach ($utenti as $utente) {
        if ($utente["eta"] >= 18) {
            $count++;
        }
    }
    echo "Numero di utenti maggiorenni: " . $count . "<br/>";
}
utentiMaggioreni($utenti, $eta);
/* -------------------------------------------------------- */
/*Utenti divisi per citta */
echo "<h3>Utenti divisi per città</h3>";

$utentiPerCitta = [];
foreach ($utenti as $utente) {
    /* $new[$child['parent']]['child'][] = $child; */
    $utentiPerCitta[$utente['citta']][] = $utente;
}

foreach ($utentiPerCitta as $citta => $listaUtenti) {
    echo "<h4>$citta</h4>";
    foreach ($listaUtenti as $utente) {
        echo $utente['nome'] . " <br>";
    }
}
