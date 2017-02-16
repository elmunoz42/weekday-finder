<?php

    require_once 'src/Date.php';

    class DateTest extends PHPUnit_Framework_TestCase
    {

        function test_jan_one_2000()
        {

            $test_date = new Date;
            $first_input = "1";
            $second_input = "1";
            $third_input = "2000";

            $result = $test_date->DayFinder($first_input, $second_input, $third_input);

            $this->assertEquals("Saturday", $result);
        }

        function test_feb_16_2017()
        {

            $test_date = new Date;
            $first_input = "16";
            $second_input = "2";
            $third_input = "2017";

            $result = $test_date->DayFinder($first_input, $second_input, $third_input);

            $this->assertEquals("Thursday", $result);
        }


    }






?>
