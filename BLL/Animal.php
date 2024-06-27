<?php
namespace BLL;
include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\DAL\Animal.php';
use DAL;

class Animal
{
    public function Select()
    {
        $dalAnml = new \Dal\Animal();
        return $dalAnml->Select();
    }

    public function SelectById(int $id)
    {
        $dalAnml = new \DAL\Animal();
        return $dalAnimal->SelectById($id);
    }

    public function Insert(\MODEL\Animal $animal)
    {
        $dalAnml = new \DAL\Animal();
        return $dalAnml->Insert($animal);
    }
    
    public function Update(\MODEL\Animal $animal)
    {
        $dalAnml = new \DAL\Animal();
        return $dalAnml->Update($animal);
    } 
    
    public function Delete(int $id)
    {
        $dalAnml = new \DAL\Animal();
        return $dalAnml->Delete($id);
    }
    
}
?>