<?php

namespace App;
/**
 * Created by PhpStorm.
 * User: josebispo
 * Date: 08/01/20
 * Time: 16:37
 */
use PHPUnit\Framework\TestCase;

use App\Model\MultipleThree;
use App\Model\MultipleThreeAndFive;
use App\Model\MultipleFive;

class MultipleTest extends TestCase
{

    public function testMultiplesFiveAndThree()
    {
        /**
         * Test success
         */
        $multiples_three_Five =  new MultipleThreeAndFive();
        $multiples_three_Five->setNumber(60);
        $this->assertEquals(true,$multiples_three_Five->getMultiple());

        /**
         * Test fail
         */
        $multiples_three_Five->setNumber(2);
        $this->assertEquals(false,$multiples_three_Five->getMultiple());
    }


    public function testMultiplesFive()
    {
        /**
         * Test success
         */
        $multiples5 =  new MultipleFive();
        $multiples5->setNumber(50);
        $this->assertEquals(true,$multiples5->getMultiple());

        /**
         * Test fail
         */
        $multiples5->setNumber(2);
        $this->assertEquals(false,$multiples5->getMultiple());
    }

    public function testMultiplesTrhee()
    {
        /**
         * Test success
         */
        $multiples3 =  new MultipleThree();
        $multiples3->setNumber(6);
        $this->assertEquals(true,$multiples3->getMultiple());

        /**
         * Test fail
         */
        $multiples3->setNumber(7);
        $this->assertEquals(false,$multiples3->getMultiple());
    }


}