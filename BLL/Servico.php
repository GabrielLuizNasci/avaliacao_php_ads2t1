<?php
namespace BLL;
include_once 'C:\Users\Rafael\Documents\GitHub\avaliacao_php_ads2t1\DAL\Servico.php';
use DAL;

class Servico
{
    public function Select()
    {
        $dalServ = new \Dal\Servico();
        return $dalServ->Select();
    }

    public function SelectById(int $id)
    {
        $dalServ = new \DAL\Servico();
        return $dalServ->SelectById($id);
    }

    public function Insert(\MODEL\Servico $servico)
    {
        $dalServ = new \DAL\Servico();
        return $dalServ->Insert($servico);
    }
    
    public function Update(\MODEL\Servico $servico)
    {
        $dalServ = new \DAL\Servico();
        return $dalServ->Update($servico);
    } 
    
    public function Delete(int $id)
    {
        $dalServ = new \DAL\Servico();
        return $dalServ->Delete($id);
    }
    
} 
?>