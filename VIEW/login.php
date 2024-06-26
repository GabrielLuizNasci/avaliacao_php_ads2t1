<?php 
  include_once '../DAL/conexao.php'; 

  $usuario = $_POST['usuario']; 
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM usuario WHERE usuario=?;";
  $con = \DAL\Conexao::conectar(); 
  $query = $con->prepare($sql);

  try{
    $query->execute([$usuario]);
    $linha = $query->fetch(\PDO::FETCH_ASSOC);
  }
    catch (Exception $e) { echo "usuario inexistente"; }

    \DAL\Conexao::desconectar(); 

   if (password_verify($senha, $linha['senha'])){
       session_start();
       $_SESSION['login'] = $usuario ;
       header("location: menu.php"); 
       exit();
   }
   else header("location: index.php"); 
   exit();

?>