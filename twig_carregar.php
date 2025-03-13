<?php
// Carrega o carregador do Composer
require_once('vendor/autoload.php');

// Loader é quem carrega os arquivos HTML
$loader = new \Twig\Loader\FilesystemLoader('./templates');

// Criar o objeto Twig
$twig = new \Twig\Environment($loader);