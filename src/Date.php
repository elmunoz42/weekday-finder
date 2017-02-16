<?php
    class Date
    {
        function DayFinder($day, $month, $year)
        {
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
