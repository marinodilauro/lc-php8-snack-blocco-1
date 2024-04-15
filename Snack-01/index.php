<?php

/* 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/


$matches = [
    [
      "homeTeam" => "Olimpia Milano",
      "homeTeamPoint" => rand(30, 70),
      "awayTeam" => "Cantù",
      "awayTeamPoint" =>  rand(30, 70)
    ],
    [
      "homeTeam" => "Virtus Bologna",
      "homeTeamPoint" =>  rand(30, 70),
      "awayTeam" => "Dinamo Sassari",
      "awayTeamPoint" =>  rand(30, 70)
    ],
    [
      "homeTeam" => "Reyer Venezia",
      "homeTeamPoint" =>  rand(30, 70),
      "awayTeam" => "Virtus Roma",
      "awayTeamPoint" =>  rand(30, 70)
    ],
    [
      "homeTeam" => "Aquila Trento",
      "homeTeamPoint" =>  rand(30, 70),
      "awayTeam" => "Vanoli Cremona",
      "awayTeamPoint" =>  rand(30, 70)
    ],
    [
      "homeTeam" => "Fortitudo Bologna",
      "homeTeamPoint" =>  rand(30, 70),
      "awayTeam" => "Banco di Sardegna Sassari",
      "awayTeamPoint" =>  rand(30, 70)
    ]

];

foreach ($matches as $match) {
  echo $match['homeTeam'] . ' - ' . $match['awayTeam'] . ' | ' . $match['homeTeamPoint'] . '-' .  $match['awayTeamPoint'];
  echo '<br>';
}

?>