<?php
    
    $pessoa=[
        'nome'=> 'Maduh',
        'idade' => '20',
        'cor' => 'white'
];
    $maioridade = 18;

if($pessoa['idade'] >= $maioridade) {
    echo "a pessoa é maior de idade!";
}