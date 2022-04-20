<?php
require("vendor/autoload.php");

use App\Classes\Perritu;
use App\Classes\Michi;



$firulais = new Perritu();
$mrmichi = new Michi();

echo $firulais->bark() . "\n";
echo $firulais->play() . "\n";

echo $mrmichi->sayMeow() . "\n";
echo $mrmichi->sleep() . "\n";
