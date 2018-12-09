<?php

$lista_giocatori = [];

//genera 3 lettere random
function makeId()
{
    $nome = '';
    $lettere = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    while (strlen($nome) < 3) {
      $randomNumber = rand(0, strlen($lettere) - 1);
      $nome .= substr($lettere, $randomNumber, 1);
    }
    return $nome;
}

//genera numeri 3 random
function randomPunti($min, $max)
{
    $punti = '';
    while (strlen($punti) < 3) {
      $punti .= rand($min, $max);
    }
    return $punti;
}

//genera numeri 2 random
function randomNumber($min, $max)
{
    $punti = '';
    while (strlen($punti) < 2) {
      $punti .= rand($min, $max);
    }
    return $punti;
}

//genera 100 schede giocatore
for ($i = 1; $i < 100; $i++) {
    $giocatore = [
    'nome'=> makeId() . randomPunti(0, 9),
    'punti'=> randomNumber(0, 60),
    'rimbalzi'=> randomNumber(0, 20),
    'falli'=> randomNumber(0, 5),
    'perc_2_punti'=> randomNumber(0, 100),
    'perc_3_punti'=> randomNumber(0, 100),
  ];
    $lista_giocatori[] = $giocatore;
}
