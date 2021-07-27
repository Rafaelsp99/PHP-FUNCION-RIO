<?php

include ('cpf.php');

$funcionarios = new FuncionariosCPF();

$todos = $funcionarios-> all();
$func = $funcionarios->find('22233344455');


print_r ($todos);
echo '<br><br>';
print_r($func);
?>