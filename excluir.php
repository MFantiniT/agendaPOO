<?php
    include_once(__DIR__ .  '/DAO/ContatoDAO.php');
    include_once(__DIR__ . '/conexaodb.php');
    $contatoDAO = new ContatoDAO;
    $contatoDAO->delete($_GET['id'], $conn);

?>