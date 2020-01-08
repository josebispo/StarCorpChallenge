<?php
/**
 * Created by PhpStorm.
 * User: josebispo
 * Date: 06/01/20
 * Time: 22:03
 */

namespace App\Model;

use App\Interfaces\MultipleInterface;

class MultipleFive implements MultipleInterface
{
    public $message;

    public $number;

    const message = 'IT';

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getMultiple()
    {
        return ! ($this->number % 5);
    }

    public function getText()
    {
        return $this->message = self::message;
    }
}