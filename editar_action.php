<?php
include_once(__DIR__ .  '/DAO/ContatoDAO.php');
include_once(__DIR__ . '/conexaodb.php');


$contato = new Contato($_POST['nome'],$_POST['telefone'],$_POST['email'], $conn);
$contatoDAO = new ContatoDAO();
$id = $_GET['id'];
$contatoDAO->update($contato, $id, $conn);


?>