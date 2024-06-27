<?php
    namespace VIEW\Dono;
    require_once __DIR__ . '/../../autoload.php';
    include_once __DIR__ . '/../../BLL/Dono.php';

    $id = $_GET['id']; 

    $bllDono = new \BLL\Dono(); 
    $result =  $bllDono->Delete($id);
    
    header("location: listarDono.php");
?>