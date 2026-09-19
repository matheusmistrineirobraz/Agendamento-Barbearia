<?php

require_once __DIR__ . '/../routes/rotas.php';

$rota = $_GET['rota'] ?? 'inicio';

carregarRota($rota);

?>