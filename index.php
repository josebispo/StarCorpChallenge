<?php
/**
 * Created by PhpStorm.
 * User: josebispo
 * Date: 06/01/20
 * Time: 22:04
 */
require __DIR__.'/vendor/autoload.php';

use Src\CheckMultiples;

$check = new CheckMultiples();
return $check->mainMultiple();

