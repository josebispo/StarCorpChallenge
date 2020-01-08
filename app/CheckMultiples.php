<?php
/**
 * Created by PhpStorm.
 * User: josebispo
 * Date: 06/01/20
 * Time: 22:05
 */

namespace App;

use App\Model\MultipleThree;
use App\Model\MultipleFive;
use App\Model\MultipleThreeAndFive;

class CheckMultiples
{
    const is_multiple = true;

    /**
     * @param int $initial_number
     * @param int $final_number
     * Check numbers is multiples of 3 and 5 and return the relative message
     */
    public function mainMultiple($initial_number = 1, $final_number = 40)
    {
        $CheckMultiplesProvider = [
            new MultipleThree,
            new MultipleFive,
            new MultipleThreeAndFive,
        ];

        for ($current_number = $initial_number; $current_number <= $final_number; $current_number++) {

            $all_numbers[$current_number] = $current_number;

            /**
             * verify the providers and check if the number is multiple by provider.
             */
            foreach ($CheckMultiplesProvider as $checkMultiple) {

                $is_multiple = $checkMultiple;
                $is_multiple->setNumber($current_number);

                if ($is_multiple->getMultiple() == self::is_multiple) {

                    $all_numbers[$current_number] = $is_multiple->getText();
                }
            }
        }

        $this->showIsMultiple($all_numbers);
    }

    /**
     * @param $multiples
     */
    public function showIsMultiple($multiples)
    {

        foreach ($multiples as $message) {
            echo $message."<br>";
        }
    }
}