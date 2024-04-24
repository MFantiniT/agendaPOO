<?php
    include_once(__DIR__ .  '/models/Contato.php');
    include_once(__DIR__ .  '/models/DAO/ContatoDAO.php');
    include_once(__DIR__ .  '/controller/AgendaController.php');
    include_once(__DIR__ . '/conexaodb.php');
    
    $controller = new AgendaController($conn);
    // Um simples roteamento baseado em 'action' que vem da URL
if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
    call_user_func([$controller, $_GET['action']]);
} else {
    $controller->index(); // Método padrão se nenhuma ação específica for fornecida
}

?>



