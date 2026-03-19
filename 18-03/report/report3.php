<?php
require_once "utenti.php";

class UserReport //Classe generale per creare report sugli utenti
{
    // È privata perché non vogliamo che venga modificata dall'esterno
    private array $utenti;

    /* -------------------------------------------------------- */
    // Costruttore- inizializzare la classe con l'elenco degli utenti
    // Viene chiamato quando facciamo new UserReport($utenti)
    public function __construct(array $utenti)
    {
        $this->utenti = $utenti;
    }
    /* -------------------------------------------------------- */
     // Conta tutti gli utenti
    public function countUsers(): int
    {
        return count($this->utenti);
    }
    /* -------------------------------------------------------- */
    // Calcola la media delle età
    public function averageAge(): float
    {
        if ($this->countUsers() === 0) return 0;
        $eta = array_column($this->utenti, 'eta');
        return array_sum($eta) / $this->countUsers();
    }
    /* -------------------------------------------------------- */
    // Conta quanti utenti sono maggiorenni
    public function countAdults(): int
    {
        $count = 0;
        foreach ($this->utenti as $utente) {
            if ($utente['eta'] >= 18) {
                $count++;
            }
        }
        return $count;
    }
    /* -------------------------------------------------------- */
    // Raggruppa gli utenti per città
    public function groupByCity(): array
    {
        $result = [];
        foreach ($this->utenti as $utente) {
            $result[$utente['citta']][] = $utente;
        }
        return $result;
    }
    /* -------------------------------------------------------- */
    // Restituisce tutti i dati del report in un array associativo
    public function getReportData(): array
    {
        return [
            'numero_utenti' => $this->countUsers(),
            'media_eta' => $this->averageAge(),
            'numero_maggiorenni' => $this->countAdults(),
            'utenti_per_citta' => $this->groupByCity(),
        ];
    }
}
/* -------------------------------------------------------- */
// Creazione di un nuovo oggetto UserReport
// chiama il costruttore
$report = new UserReport($utenti);
/* -------------------------------------------------------- */
// Richiamo dei dati del report
// Salvo tutto in $data per semplificare l'accesso e stampa
$data = $report->getReportData();
/* -------------------------------------------------------- */
// Stampa del report
echo "<h3>Report Utenti</h3>";
echo "<p>Numero utenti: {$data['numero_utenti']}</p>";
echo "<p>Media età: {$data['media_eta']}</p>";
echo "<p>Numero maggiorenni: {$data['numero_maggiorenni']}</p>";

echo "<h3>Utenti per città</h3>";
foreach ($data['utenti_per_citta'] as $citta => $utenti) {
    echo "<h4>$citta</h4>";
    foreach ($utenti as $utente) {
        echo $utente['nome'] . " - ";
    }
    echo "<br>";
}
/*https://www.w3schools.com/php/php_oop_classes_objects.asp  OOP in php*/
/* https://www.w3schools.com/php/php_oop_constructor.asp  costruttori in php*/
/* https://www.w3schools.com/php/php_arrays_associative.asp  array associativo per stampare?*/