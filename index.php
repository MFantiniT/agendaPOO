<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
    <!-- aqui vamos fazer apenas o html da tabela com bootstrap que vai exibir os contatos, o backend sera feito depois -->
    <div class="container">
        <h1>Agenda de contatos</h1>
        <a href="adicionar.php" class="btn btn-primary">Adicionar contato</a>
        <table class="table" border=2px>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João</td>
                    <td>(11) 99999-9999</td>
                    <td>joaozinho@gmail.com</td>
                    <td>
                        <a href="editar.php" class="btn btn-warning">Editar</a>
                        <a href="excluir.php" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    


    
</body>
</html>