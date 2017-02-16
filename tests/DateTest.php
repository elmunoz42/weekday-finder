<?php

    require_once 'src/Date.php';

    class DateTest extends PHPUnit_Framework_TestCase
    {

        function test_jan_one_2000()
        {

            $test_date = new Date;
            $first_input = "2000-01-01";

            $result = $test_date->DayFinder($first_input);

            $this->assertEquals("Saturday", $result);
        }

        function test_feb_16_2017()
        {

            $test_date = new Date;
            $first_input = "2017-02-16";

            $result = $test_date->DayFinder($first_input);

            $this->assertEquals("Thursday", $result);
        }


    }






?>
