<?php
#horario.php
require_once('twig_carregar.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;
/**
 * Montar uma página no Twig chamado "horário"
 * Será possível acessar pelo menu
 * Devera mostrar a data de hoje e a data de amanhã 
*/ 

echo "Data de hoje:" . Carbon::now() . '<br>';
echo "Data de amanhã:" . Carbon::now()->addDay() . '<br>';

echo $twig->render('horario.html', [
    'titulo' => 'Compras',
    'compras' => $comp,
]);