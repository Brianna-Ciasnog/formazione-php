<?php
/* 
Approcio iniziale:
Funzione che Stampa da un numero minimo 1 al numero passo come parametro andando a farlo controllare se appartine a uno di 3 casi "FizzBuzz" , "Fizz" o "Buzz" altriemeti torna il numero

function fizzBuzz($num)
{
   for ($i = 1; $i <= $num; $i++) {
      if ($i % 3 == 0 && $i % 5 == 0) {
         echo "FizzBuzz<br />";
      } else if ($i % 3 == 0) {
         echo "Fizz<br />";
      } else if ($i % 5 == 0) {
         echo "Buzz<br />";
      } else {
         echo $i . "<br />";
      }
   }
};
echo fizzBuzz(18); */

/* Evoluzione:
per addattarlo hai metodi di programmazione ideale e addato al essere utilizzato da api o richieste fututre senza la neccesaria modifica della funzione fizzBuzz ma tramite la relaizazione di altre funzioni specifiche rendendo ogni entità fine a un job specifico */
$limit = 12;
$result = [];

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
};

for ($i = 1; $i <= $limit; $i++) {
   $result[] = fizzBuzz($i);
}
