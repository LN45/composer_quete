<?php
/**
 * Created by PhpStorm.
 * User: ln
 * Date: 30/09/18
 * Time: 15:58
 */

require '../vendor/autoload.php';


$hello = new \App\Wcs\Hello();
echo $hello->talk();

$world = new \HelloWorld\SayHello();
echo $world->world();
