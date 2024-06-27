<?php
namespace BLL;
include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\DAL\Dono.php';
use DAL;

class Dono{
    public function Select(){
        $dalTutor = new \DAL\Dono();
        return $dalTutor->Select();
    }

    public function SelectById(int $id){
        $dalTutor = new \DAL\Dono();
        return $dalTutor->SelectById($id);
    }

    public function Insert(\MODEL\Dono $dono){
        $dalTutor = new \DAL\Dono();
        return $dalTutor->Insert($dono);
    }
    
    public function Update(\MODEL\Dono $dono){
        $dalTutor = new \DAL\Dono();
        return $dalTutor->Update($dono);
    } 
    
    public function Delete(int $id){
        $dalTutor = new \DAL\Dono();
        return $dalTutor->Delete($id);
    }
    
} 
?>