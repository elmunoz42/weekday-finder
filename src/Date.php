<?php
    class Date
    {
        function DayFinder($userInput)
        {

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
