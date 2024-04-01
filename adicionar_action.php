<?php
    include_once(__DIR__ .  '/DAO/ContatoDAO.php');
    include_once(__DIR__ . '/conexaodb.php');
    $contatoDAO = new ContatoDAO;
    $contato = new Contato($_POST['nome'], $_POST['telefone'], $_POST['email'], $conn);
    $contatoDAO->create($contato, $conn);

?>