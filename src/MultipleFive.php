<?php
/**
 * Created by PhpStorm.
 * User: josebispo
 * Date: 06/01/20
 * Time: 22:03
 */

namespace Src;

use Src\Interfaces\MultipleInterface;

class MultipleFive implements MultipleInterface
{
    public $name;

    public $number;

    const name = 'IT';

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return (($this->number % 5));
    }

    public function getText()
    {
        return $this->name = self::name;
    }
}