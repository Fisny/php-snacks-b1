<?php

/*
Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato:
DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati
a quella data.
Stampare ogni data con i relativi post.

Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z
*/

$posts = [

    '10/01/2019' => [
        ["post1", "post2", "post3"]
    ],
    '10/02/2019' => [

    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>