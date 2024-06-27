<?php 
    namespace VIEW\Dono;
    require_once __DIR__ . '/../../autoload.php';
    include_once __DIR__ . '/../../MODEL/Dono.php';
    include_once __DIR__ . '/../../BLL/Dono.php';

    $dono = new \MODEL\Dono();

    $dono->setIdDono($_POST['id']);
    $dono->setNome($_POST['nome']);
    $dono->setSexo($_POST['sexo']);
    $dono->setDataNasc($_POST['dataNasc']);
    $dono->setCpf($_POST['cpf']);

    $bllDono = new \BLL\Dono(); 
    $result =  $bllDono->Insert($dono);  

    if ($result->errorCode() == '00000') {
        header("location: listarDono.php");
      }
      else echo $result->errorInfo();
  

?>