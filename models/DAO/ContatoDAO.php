<?php
    
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
            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':nome', $nome);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            header('Location: ' . 'index.php');
        }
        public function update(Contato $contato, $id, $conn)
        {
            $sql = "UPDATE contatos SET nome = :nome, telefone = :telefone, email = :email WHERE id=:id";
            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':nome', $nome);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            header('Location: ' . 'index.php');
        }
        public function delete($id, $conn)
        {
            $sql = "DELETE from contatos WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            header('Location: ' . 'index.php');
        }
    }