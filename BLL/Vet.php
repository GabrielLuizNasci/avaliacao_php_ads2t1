<?php
namespace BLL;
include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\DAL\Vet.php';
use DAL;

class Vet{
    public function Select(){
        $dalVeterinario = new \DAL\Vet();
        return $dalVeterinario->Select();
    }

    public function SelectById(int $idVet){
        $dalVeterinarior = new \DAL\Vet();
        return $dalVeterinario->SelectById($idVet);
    }

    public function Insert(\MODEL\Vet $vet){
        $dalVeterinario = new \DAL\Vet();
        return $dalVeterinario->Insert($vet);
    }
    
    public function Update(\MODEL\Vet $vet){
        $dalVeterinario = new \DAL\Vet();
        return $dalVeterinario->Update($vet);
    } 
    
    public function Delete(int $id){
        $dalVeterinario = new \DAL\Vet();
        return $dalVeterinario->Delete($idVet);
    }
    
} 
?>