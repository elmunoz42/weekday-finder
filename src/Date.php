<?php
    class Date
    {
        function DayFinder($input)
        {
            $date_array = explode("-", $input);
            $year = $date_array[0];
            $month = $date_array[1];
            $day = $date_array[2];

            return date("l", mktime(substr($year,-3,1), substr($year,-2,1), substr($year,-1), $month, $day, $year));
        }



        function save($results)
        {
            array_unshift($_SESSION['dates'], $results);
        }

        static function getAll()
        {
            return $_SESSION['dates'];
        }

        static function deleteAll()
        {
            $_SESSION['dates'] = array();
        }




    }


?>
