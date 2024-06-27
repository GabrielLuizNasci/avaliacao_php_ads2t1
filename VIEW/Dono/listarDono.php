<?php
    include_once 'D:\xampp\htdocs\avaliacao_php_ads2t1\BLL\Animal.php';

    $bllDono = new BLL\Dono();
    $listaDono = $bllDono->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Listar Donos</title>
</head>

<body>
    <h1>Listar Donos</h1>

    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Operações
                <a class="btn-floating btn-small waves-effect waves-light green">
                    <i class="material-icons" onclick="JavaScript:location.href='formDono.php'">add</i>
                </a>

                <a class="btn-floating btn-small waves-effect waves-light deep-purple accent-2">
                    <i class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i>
                </a>
            </th>
        </tr>

        <?php foreach ($listaDono as $dono) { ?>
            <tr>
                <td><?php echo $dono->getIdDono(); ?></td>
                <td><?php echo $dono->getNome(); ?></td>
                <td><?php echo $dono->getSexo(); ?></td>
                <td><?php echo $dono->getDataNasc(); ?></td>
                <td><?php echo $dono->getCpf(); ?></td> 
            </tr>
        <?php } ?>

    </table>
</body>

</html>