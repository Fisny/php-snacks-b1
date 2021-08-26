<?php

/*
Creiamo una struttura dati che rappresenta le partite di basket
di un’ipotetica tappa del calendario.
Ogni array interno conterrà le seguenti informazioni:
una squadra di casa
una squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/

$partite = [
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Cantù",
        "casaPunti" => 55,
        "ospitePunti" => 60
    ],
    [
        "casa" => "Virtus Bologna",
        "ospite" => "Virtus Roma",
        "casaPunti" => 40,
        "ospitePunti" => 30
    ],
    [
        "casa" => "F.C. Matera",
        "ospite" => "Inter",
        "casaPunti" => 55,
        "ospitePunti" => 1
    ]
];

for($i = 0;$i < count($partite); $i++) {
    echo "{$partite[$i] ['casa']} - {$partite[$i] ['ospite']} | {$partite[$i] ['casaPunti']} - {$partite[$i] ['ospitePunti']} <br/>";
}

?>