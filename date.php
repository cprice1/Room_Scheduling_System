<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function getAvailableTimes($date, $times) {

            //restub with database calls
            if ($date . dayOfWeek == "Monday") {
                $times = array("8:00 AM", "9:00 AM", "10:00 AM");
                
            } else if ($date . dayOfWeek == "Tuesday") {
                $times = array("11:00 AM", "12:00 PM", "1:00 PM");
                
            } else if ($date . dayOfWeek == "Wednesday") {
                $times = array("2:00 PM", "3:00 PM", "4:00 PM");
                
            } else if ($date . dayOfWeek == "Thursday") {
                $times = array("5:00 PM", "6:00 PM", "7:00PM");
                
            } else if ($date . dayOfWeek == "Friday") {
                $times = array("8:00 AM", "9:00 AM", "10:00 AM");
                
            } else if ($date . dayOfWeek == "Saturday") {
                $times = array("11:00 AM", "12:00 PM", "1:00 PM");
                
            } else if ($date . dayOfWeek == "Sunday") {
                $times = array("2:00 PM", "3:00 PM", "4:00 PM");
            }
        }
        ?>
    </body>
</html>
