<?php
    require_once __DIR__ . '/../../autoload.php';
    include_once __DIR__ . '/../../BLL/Dono.php';

    use BLL\Dono;

    $bllDono = new BLL\Dono();
    $listaDono = $bllDono->Select();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listar Donos</title>
    </head>

    <body>
        <h1>Donos Cadastrados</h1>

        <a class="btn-floating btn-small waves-effect waves-light green">
            <i class="material-icons" onclick="JavaScript:location.href='formDono.php'">add</i>
        </a>

        <a class="btn-floating btn-small waves-effect waves-light deep-purple accent-2">
            <i class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i>
        </a>

        <table class="highlight">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaDono as $dono) { ?>
                    <tr>
                        <td><?php echo $dono->getIdDono(); ?></td>
                        <td><?php echo $dono->getNome(); ?></td>
                        <td><?php echo $dono->getSexo(); ?></td>
                        <td><?php echo $dono->getDataNasc(); ?></td>
                        <td><?php echo $dono->getCpf(); ?></td>
                        <td>
                            <a href="editarDono.php?id=<?php echo $dono->getIdDono(); ?>">Editar</a> | 
                            <a href="excluirDono.php?id=<?php echo $dono->getIdDono(); ?>" onclick="return confirm('Tem certeza que deseja excluir este dono?')">Excluir</a> 
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>