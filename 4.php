<?php



/*
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà i seguenti dati:
nome
cognome
un array contenente i suoi voti scolastici
Stampare nome, cognome e la media dei voti di ogni alunno.
*/

$alunni = [
    'Classe A' => [
        [
            "nome" => "Bardi",
            "cognome" => "Fisniku",
            'voti' =>[8, 7, 6]
        ]
    ],
    'Classe B' => [
        [
            "nome" => "Dario",
            "cognome" => "Rossi",
            'voti' =>[6, 7, 7]
        ]
    ],
    'Classe c' => [
        [
            "nome" => "Luca",
            "cognome" => "Ianni",
            'voti' =>[8, 8, 7]
        ]
    ],

];

for($i = 0;$i < count($alunni); $i++) {

    // var_dump($alunni['Classe A']);
    for($x = 0; $x < count($alunni[$i]); $x++){
        echo "{$alunni[$x]['nome']} <br/> {$alunni[$x]['cognome']} <br/> {$alunni[$x]['voti']} <hr/>";
        var_dump($alunni[$x]); 
        
    }
}
    

?>