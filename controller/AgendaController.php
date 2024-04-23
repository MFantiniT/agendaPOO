<?php


class AgendaController
{
    private $contatoDAO;
    private $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
        $this->contatoDAO = new ContatoDAO();
    }
    public function index()
    {
        $contatos = $this->contatoDAO->findAll($this->conn);
        include('view/index.php');
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Captura dados do formulário
            $nome = $_POST['nome'] ?? null;
            $telefone = $_POST['telefone'] ?? null;
            $email = $_POST['email'] ?? null;

            // Verifica se todos os dados necessários estão presentes
            if ($nome && $telefone && $email) {
                // Cria um novo contato
                $contato = new Contato($nome, $telefone, $email);
                // Adiciona o contato através do DAO
                $this->contatoDAO->create($contato, $this->conn);


                exit;
            } else {
                // Talvez adicionar alguma lógica para lidar com dados incompletos
                $error = "Todos os campos são obrigatórios.";
                echo $error;
            }
        }

        // Exibe o formulário novamente (possivelmente com mensagem de erro)
        include 'view/adicionar.php';
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_GET['id'];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];

            if ($nome && $telefone && $email) {
                $contato = new Contato($nome, $telefone, $email);
                $this->contatoDAO->update($contato, $id, $this->conn);
                exit;
            } else {
                $error = "!!!";
                echo $error;
            }
        }
        //inclui a view
        include 'view/editar.php';
    }
    public function delete(){
        $id = $_GET['id'];
        $this->contatoDAO->delete($id, $this->conn);
    }
}
