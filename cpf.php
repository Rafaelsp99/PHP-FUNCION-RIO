<?php

class FuncionariosCPF

{

    private $funcionarios;

    function __construct()
    {
      $this ->funcionarios = [
         [ 'cpf' => '11122233344', 'nome'=> 'João', 'salario'=> 'R$5200'],
         ['cpf' => '22233344455', 'nome' => 'Maria','salario'=> 'R$7200']
      ]  ;
    }

    public function all()
    {
        return $this -> funcionarios;
    }

    public function find ($cpf)
    {

        foreach ($this ->funcionarios as $func){
            if($func['cpf']== $cpf){
                return $func;
            }
        }
        return null;
    }
}
?>