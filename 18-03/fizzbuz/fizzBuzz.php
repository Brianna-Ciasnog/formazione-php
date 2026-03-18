<?php
/*Aggiormaneto 05/03
Esercizi 
*voglio che completi le funzioni coerente e che rifaccio l'esercizio di report seguendo questo metodo logico */
$limit = 12;
/* $result = []; non trovo che abbia senso instazione qui result */
function fizzBuzz(int $num): string
{
   if ($num % 3 == 0 && $num % 5 == 0) {
      return "FizzBuzz";
   } else if ($num % 3 == 0) {
      return "Fizz";
   } else if ($num % 5 == 0) {
      return "Buzz";
   } else {
      return "$num";
   }
}
/* trovo abbia piu senso esista nello scope di cycleNumbers in modo che la firma diventi un array e non un void dato che e quello che vora comuque sempre restituire  */
function cycleNumbers(int $limit): array
{
   $result = [];
   for ($i = 1; $i <= $limit; $i++) {
      $result[] = fizzBuzz($i);
   }
   return $result;
}

/* ora la prima funzione richiede di stampare a video partendo da cio che anniamo al intenro di cycle cioe nel mio caso un array percio credo basti come avevo fatto in precedenza ciclare i singoli elementi di result dato che e al singolare ho pensato potesse essere approtiato item dato che vado a prendere il singolo "oggetto" */
function printToHtml(array $result): void
{
   echo "<ul>";
   foreach ($result as $item) {
      echo "<li>$item</li>";
   }
   echo "</ul>";
}

/* ho deciso di inseririre la funziona al intenro di una variabile per riutilizzabilità  */
$fizzBuzzList = cycleNumbers($limit);
printToHtml($fizzBuzzList);


/* la seconda cosa e pendere semrpe l'array di cyclenumbers e trasfromarlo in un jason ho cercato su internt  il memntdo per refroamre qualcosa in json */
function printToJSON(array $result): void
{
   /* echo */json_encode($result); //usato l'echo per controlla che funzioni 
}

/* printToJSON($fizzBuzzList); */
