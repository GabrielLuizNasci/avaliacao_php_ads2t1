<?php 
   include_once '../DAL/conexao.php'; 

   $usuario = $_POST['usuario']; 
   $senha = $_POST['senha'];

    $sql = "Select * from usuario where usuario=?;";
    $con = \dal\Conexao::conectar(); 
    $query = $con->prepare($sql);

    try{
      $query->execute (array($usuario));
      $linha = $query->fetch(\PDO::FETCH_ASSOC);
    }
    catch (Exception $e) { echo "usuario inexistente"; }

    \dal\Conexao::desconectar(); 

   if (md5($senha) == $linha['senha']){
       session_start();
       $_SESSION['login'] = $usuario ;
       //$_SESSION['nivel'] = $linha['nivel']; 
       header("location:menu.php"); 
       exit();
   }
   else header("location:index.php"); 

?>