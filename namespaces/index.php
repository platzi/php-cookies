<?php

// require("Classes/Michi.php");
require("Logic/CreateMichis.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <li><?= $mrmichi->getName() ?> fue adoptado por: <?= $mrmichi_adopted->getAdopted_by() ?></li>
        <li><?= $michisancio->getName() ?> fue adoptado por: <?= $michisancio_adopted->getAdopted_by() ?></li>
        <li><?= $michales->getName() ?> fue adoptado por: <?= $michales_adopted->getAdopted_by() ?></li>
    </ul>

</body>
</html>