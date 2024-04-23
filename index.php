<?php
    include_once(__DIR__ .  '/models/Contato.php');
    include_once(__DIR__ .  '/models/DAO/ContatoDAO.php');
    include_once(__DIR__ .  '/controller/AgendaController.php');
    include_once(__DIR__ . '/conexaodb.php');
    
    $agendaController = new AgendaController($conn);
    $agendaController->index();  // Apenas chame index(), sem passar $conn
?>

?>

