<?php

define('ROOT_PATH', dirname(__DIR__));

define('APP_PATH', ROOT_PATH . '/app');

define('CONFIG_PATH', APP_PATH . '/config');

define('CONTROLLER_PATH', APP_PATH . '/controllers');

define('MODEL_PATH', APP_PATH . '/models');

define('VIEW_PATH', APP_PATH . '/views');


function carregarRota(string $rota): void
{
    $rotas = [

        'dashboard' => VIEW_PATH . '/dashboard/index.php',

        'agendamentos' => VIEW_PATH . '/agendamento/agendar.php',

        'servicos' => VIEW_PATH . '/servicos/servicos.php',

        'clientes' => VIEW_PATH . '/cliente/cliente.php',

        'profissionais' => VIEW_PATH . '/funcionario/funcionario.php',

        'horarios' => VIEW_PATH . '/horarios/horarios.php',

        'relatorios' => VIEW_PATH . '/relatorios/relatorios.php',

        'configuracoes' => CONFIG_PATH . '/edit.php',

    ];

    if (!isset($rotas[$rota])) {
        http_response_code(404);

        echo 'Página não encontrada.';
        return;
    }

    require $rotas[$rota];
}