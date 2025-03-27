<?php
# carbon_exemplos.php

// Carregar o composer
require_once('vendor/autoload.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

// Agora
echo Carbon::now() . '<br>';

// Adicina um dia,mês,ano
echo Carbon::now()->addDay() . '<br>';
echo Carbon::now()->addYear() . '<br>';

// Subtarir uma semana
echo Carbon::now()->subWeek() . '<br>';

// Adiciona 4 anos
echo 'Próximas Olimpíadas:'.
    Carbon::createFromDate(2024)->addYears(4)->year . 
    '<br>';

// Idade de alguem
echo "Sua idade é:" .
    Carbon::createFromDate(2007,7,30)->age . 
    '<br>';

// Final de semana
if (Carbon::now()->isWeekend()) {
    echo 'Festa!';
}
else {
    echo 'Trabalho';
}
echo '<br>';

// Calcular diferença entre datas
$nascimento = Carbon::createFromDate(2007,7,30);
echo 'Diferença de data:' . 
    Carbon::now()->diff($nascimento);
    $data_aleatoria; 
    $data = Carbon::parse();