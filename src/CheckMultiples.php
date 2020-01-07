<?php
/**
 * Created by PhpStorm.
 * User: josebispo
 * Date: 06/01/20
 * Time: 22:05
 */

namespace Src;

use Src\MultipleThree;

class CheckMultiples
{
    const is_multiple = 0;

    public function mainMultiple($initial_number = 1, $final_number = 100)
    {

        $CheckMultiplesProvider = [
            new MultipleThree,
            new MultipleFive,
            new MultipleThreeAndFive,
        ];

        for ($current_number = $initial_number; $current_number <= $final_number; $current_number++) {

            foreach ($CheckMultiplesProvider as $checkMultiple) {

                $is_multiple = $checkMultiple;
                $is_multiple->setNumber($current_number);

                if ($is_multiple->getNumber() == self::is_multiple) {
                    $this->showIsMultiple($is_multiple->getText());
                }
            }
        }
    }

    /**
     * @param $text
     */
    public function showIsMultiple($text)
    {
        echo $text."<br>";
    }
}