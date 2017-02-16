<?php

    require_once 'src/Date.php';

    class DateTest extends PHPUnit_Framework_TestCase
    {

        function test_one_point_letter()
        {

            $test_date = new Date;
            $first_input = "1";
            $second_input = "12";
            $third_input = "1900";

            $result = $test_scrabbleScore->DayFinder($first_input, $second_input, $third_input);

            $this->assertEquals("something", $result);
        }



    }






?>
