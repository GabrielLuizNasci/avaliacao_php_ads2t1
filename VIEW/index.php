<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!------ Links do Bootsnip ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
    <title>Pais de Pet</title>

    <!-- CSS em Arquivos -->
    <link rel="stylesheet" href="../VIEW/css/style.css">
    
</head>

<body>
    <div class="container login-container">
      <div class="row">
        <div class=" ads">
          <img src="./assets/Veterinaria_logo.png" alt="profile_img" >
        </div>
        <div class="col-md-6 login-form">
            <div class="profile-img">
            
            </div>
            <h3>Login</h3>
            <form method="POST" action="login.php">
                <div class="form-group">
                <input type="text" class="form-control" name="usuario" placeholder="Usuário">
                </div>
                <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
                <div class="form-group">
                <button type="submit" name="action" class="btn btn-primary btn-lg btn-block">Fazer Login</button>
                </div>
                <div class="form-group forget-password">
                    <a href="#">Forget Password</a>
                </div>
            </form>
        </div>
      </div>
    </div>

    <?php include_once 'rodape.php' ?>

<body>

</html>