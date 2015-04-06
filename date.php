<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function getAvailableTimes($date) {

            //restub with database calls
            if ($date . dayOfWeek == "Monday") {
                return array("8:00 AM", "9:00 AM", "10:00 AM");
            } else if ($date . dayOfWeek == "Tuesday") {
                return array("11:00 AM", "12:00 PM", "1:00 PM");
            } else if ($date . dayOfWeek == "Wednesday") {
                return array("2:00 PM", "3:00 PM", "4:00 PM");
            } else if ($date . dayOfWeek == "Thursday") {
                return array("5:00 PM", "6:00 PM", "7:00PM");
            } else if ($date . dayOfWeek == "Friday") {
                return array("8:00 AM", "9:00 AM", "10:00 AM");
            } else if ($date . dayOfWeek == "Saturday") {
                return array("11:00 AM", "12:00 PM", "1:00 PM");
            } else if ($date . dayOfWeek == "Sunday") {
                return array("2:00 PM", "3:00 PM", "4:00 PM");
            }
        }
        ?>
    </body>
</html>
