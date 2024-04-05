<?php
//ESERCIZIO 1

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”
//  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere.

$users = [
    ['name' => 'Luca',
    'surname' => 'Perini', 
    'gender' => 'Male'],
  ];

 if ($users[0]['gender'] == 'Male'){
     echo "Buongiorno Sig. " . $users[0]['name'] . " " . $users[0]['surname'] . ".\n";
 } else{
    echo "Buongiorno Sig.ra " . $users[0]['name'] . " " . $users[0]['surname'] . ".\n";
 };

 //ESERCIZIO 2

 //Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array.

 $randomNumbers = [3, 4, 6, 7, 8, 23, 45, 12, 34, 55, 31];
$counter = 0;
 $average = 0;

 foreach ($randomNumbers as $number){
     if ($number % 2 == 0) {
         $average += $number;
         $counter++;
     }
 }
 
 echo "\nLa media dei numeri pari è: ". $average / $counter . ".";

 //ESERCIZIO 3

//  Scrivere un programma che stampi in console tutti i numeri da uno a cento.
//  Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
//  se multiplo di 5 stampare “JAVASCRIPT”;
//  se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".



 for ($i=1; $i <= 100; $i++) { 
     
     if ($i % 3 == 0 && $i % 5 == 0 && $i){
         echo "HACKADEMY\n";
     } else if ($i % 5 == 0 && $i){
         echo "JAVASCRIPT\n";
     } else if ($i % 3 == 0 && $i){
         echo "PHP";
     } else {
        echo "$i\n";
     }
 };

 //ESERCIZIO BONUS

 // Il programma genera un numero casuale da 1 a 10, l'utente deve indovinarlo, se sbaglia, deve ritentare.

 $randomNumber = rand(1,10);

do {
    $userNumber = readline('Insert a number between 1 and 10: ');

    if($userNumber == $randomNumber){
            echo "You Win! \n";
     } else if ($userNumber > $randomNumber) {
         echo "Today's number is smaller than your! \n";
     } else {
            echo "Today's number is bigger than your! \n";
        }
    } while($userNumber != $randomNumber);