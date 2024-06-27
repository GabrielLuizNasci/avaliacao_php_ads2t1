<?php
    require_once __DIR__ . '/../../autoload.php';
    include_once __DIR__ . '/../../BLL/Dono.php';

    use BLL\Dono;

    $bllDono = new BLL\Dono();
    $listaDono = $bllDono->Select();

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Donos</title>

</head>

<body>
    <div class="container indigo lighten-4 deep-orange-text col s12">
        <div class="center green">
            <h1>Inserir Donos</h1>
        </div>
        <div >
            <form action="inserirDono.php" method="POST">
               
            </form>
        </div>
    </div>
</body>

</html