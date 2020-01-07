<?php
/**
 * Created by PhpStorm.
 * User: josebispo
 * Date: 06/01/20
 * Time: 22:00
 */

namespace Src\Interfaces;

interface MultipleInterface
{
    /**
     * @return mixed
     */
    public function getText();

    /**
     * @param $number
     * @return mixed
     */
    public function setNumber($number);
}