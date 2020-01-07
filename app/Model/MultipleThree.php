<?php
/**
 * Created by PhpStorm.
 * User: josebispo
 * Date: 06/01/20
 * Time: 22:03
 */

namespace App\Model;
use App\Interfaces\MultipleInterface;

class MultipleThree implements MultipleInterface
{

    public $name;

    public $number;

    const name = 'StarCorp';

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getMultiple() {
        return !($this->number % 3) ;
    }


    public function getText() {
      return $this->name = self::name;
    }







}