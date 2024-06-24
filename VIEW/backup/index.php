<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Pais de Pet</title>

    <!-- CSS em Arquivos -->
    <link rel="stylesheet" href="../VIEW/backup/style.css">
</head>
<body>
    <div class="sidenav">
        <img src="assets\Veterinaria_logo.png" alt="">
    </div>
    <div class="main">
        <div class="login-text">
            <h2>Bem-vindo ao nosso Sistema de Cadastro!</h2>
            <h3>Informe os dados necessários para seu acesso. </h3>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                
                <form method="POST" action="login.php">
                  <div class="form-group">
                     <label>Nome de Usuário:</label>
                     <input type="text" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Senha:</label>
                     <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-black">Login</button>
                  <button type="submit" class="btn btn-secondary">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>