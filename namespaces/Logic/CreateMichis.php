<?php

require("Classes/MichisAdoptados/Michi.php");
require("Classes/MichisDisponibles/Michi.php");

use MichisDisponibles\Michi;
use MichisAdoptados\Michi as MichiAdoptado;

$mrmichi = new Michi("Mr. Michi", "Blanquito", 16);
$michisancio = new Michi("Michisancio", "Naranjita", 14);
$michales = new Michi("Michales", "Negrito", 15);

$mrmichi_adopted = new MichiAdoptado("Mr. Michi", new DateTime("2022-04-21"), "Retaxito");
$michisancio_adopted = new MichiAdoptado("Michisancio", new DateTime("2022-01-15"), "Juanito");
$michales_adopted = new MichiAdoptado("Michales", new DateTime("2022-03-05"), "Pedrito");