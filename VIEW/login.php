<?php 
  require_once __DIR__ . '/../autoload.php';
  include_once __DIR__ . '/../DAL/conexao.php';

  use DAL\Conexao;

  $usuario = $_POST['usuario']; 
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM usuario WHERE usuario=?;";
  $con = \DAL\Conexao::conectar(); 
  $query = $con->prepare($sql);

  try{
    $query->execute([$usuario]);
    $linha = $query->fetch(\PDO::FETCH_ASSOC);

    if($linha && password_verify($senha, $linha['senha'])){
      session_start();
      $_SESSION['login'] = $usuario;
      header("Location: menu.php");
      exit();
    } else {
      header("Location: index.php?erro=1");
      exit();
    }
  } catch(PDOException $e){ 
      echo "Erro de banco de dados: " . $e->getMessage();
  } finally {
    Conexao::desconectar();
  }

?>