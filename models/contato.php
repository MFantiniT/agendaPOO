<?php

    Class Contato{
        
        private $nome;
        private $telefone;
        private $email;
        
    
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        
        public function __construct($nome, $telefone, $email){
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
            
        }

    }
    interface I_contatoDAO{
        public function findAll(PDO $conn);
        public function create(Contato $contato, $conn);
        public function update(Contato $contato, $id, $conn);
        public function delete($id, $conn);

    }
?>