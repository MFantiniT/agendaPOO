<?php
    include_once('../models/Contato.php');

    Class ContatoDAO implements I_contatoDAO{
        public function findAll(PDO $conn)
        {
            $sql = "SELECT * FROM contatos";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function create(Contato $contato, $conn)
        {
            $sql = "INSERT INTO CONTATOS(nome, telefone, email) VALUES (:nome, :telefone, :email)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $contato->getNome());
            $stmt->bindParam(':telefone', $contato->getTelefone());
            $stmt->bindParam(':email', $contato->getEmail());
            $stmt->execute();
        }
        public function update(Contato $contato, $conn)
        {
            $sql = "UPDATE contatos SET nome = :nome, telefone = :telefone, email = :email WHERE id=:id";
        }
        public function delete($id, $conn)
        {
            $sql = "";
        }
    }