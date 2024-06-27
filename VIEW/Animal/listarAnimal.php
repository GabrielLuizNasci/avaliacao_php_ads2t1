<?php
    include_once 'D:\xampp\htdocs\avaliacao_php_ads2t1\BLL\Animal.php';

    $bllAnim = new \BLL\Animal();
    $lstAnim = $bllAnim->Select();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Listar Animais</title>
</head>

<body>
    <h1>Listar Animais</h1>

    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Espécie</th>
            <th>Porte</th> 
            <th>Operações
                <a class="btn-floating btn-small waves-effect waves-light green">
                    <i class="material-icons" onclick="JavaScript:location.href='formAnimal.php'">add</i>
                </a>

                <a class="btn-floating btn-small waves-effect waves-light deep-purple accent-2">
                    <i class="material-icons" onclick="JavaScript:location.href='../menu.php'">arrow_back</i>
                </a>
            </th>
        </tr>

        <?php foreach ($lstAnim as $anim) { ?>
            <tr>
                <td><?php echo $anim->getIdAnimal(); ?></td>
                <td><?php echo $anim->getNome(); ?></td>
                <td><?php echo $anim->getEspecie(); ?></td>
                <td><?php echo $anim->getPorte(); ?></td>  
            </tr>
        <?php } ?>

    </table>
</body>

</html>