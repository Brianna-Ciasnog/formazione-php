<?php
require_once "utenti.php";

echo "<h3> Report </h3>";

/* -------------------------------------------------------- */
/* secondo la logica di fizzbuzz prima ho bisogno di una funzione che vada solo a prendere gli utenti */
function countUsers(array $utenti): int
{
    return count($utenti);
}
/* se e necessario stamparli  basta prendere la funzione*/
echo "<h3>Numero Utenti</h3>";
echo countUsers($utenti);

/* -------------------------------------------------------- */
/*Media del età */
function averageAge(array $utenti): float
{
    $eta = array_column($utenti, 'eta');
    $somma = array_sum($eta);
    return $somma / countUsers($utenti);
}
/* se e necessario stamparli  basta prendere la funzione*/
echo "<h3>Media età</h3>";
echo averageAge($utenti);
/* -------------------------------------------------------- */
/*Utenti maggioreni  */
function countAdults(array $utenti): int
{
    $count = 0;
    foreach ($utenti as $utente) {
        if ($utente["eta"] >= 18) {
            $count++;
        }
    }
    return $count;
}
/* se e necessario stamparli  basta prendere la funzione*/
echo "<h3>Maggiorenni</h3>";
echo countAdults($utenti);
/* -------------------------------------------------------- */
/*Utenti divisi per citta */
function groupByCity(array $utenti): array
{
    $result = [];
    foreach ($utenti as $utente) {
        $result[$utente['citta']][] = $utente;
    }
    return $result;
}
$citta = groupByCity($utenti);
/* se e necessario stamparli  basta prendere la funzione*/
foreach ($citta as $nomeCitta => $lista) {
    echo "<h4>$nomeCitta</h4>";
    foreach ($lista as $utente) {
        echo $utente['nome'] . " - ";
    }
}
