<?php

function hours(){

    if(isset($_POST['submit']) ){

        if(isset($_POST['startTime']) && isset($_POST['endTime']) ){
            $start      = $_POST['startTime'];
            $end        = $_POST['endTime'];
        }

        $days = "";
        $hours = "";
        $minutes = "";

        $startTime  = new DateTime($start);
        $endTime    = new DateTime($end);

        $diff       = $endTime->diff($startTime);

        $total_time = $diff->format( '%H:%I:%S' );

        $decimal_time  = $diff->h . " Hours and " . $diff->i . " minutes.";

        if($diff->d > 0){
            $days = $diff->d . " day(s) ";
        }
        if($diff->h > 0){
            $hours = $diff->h . " hours ";
        }
        if($diff->i > 0){
            $minutes = $diff->i . " minutes ";
        }
        echo "<div class='text-center'>";
        echo "<p class='alert alert-info'>". $days.$hours.$minutes . "</p>";
        echo "</div>";

        if(isset($_POST['hourlyRate']) ){
            $rate       = $_POST['hourlyRate'];

            $seconds    = $diff->days * 24 * 60 * 60;
            $seconds    += $diff->h * 60 * 60;
            $seconds    += $diff->i * 60;
            $seconds    += $diff->s;

            $minutes    = $seconds / 60;
            $hours      = $minutes / 60;

            $hours      = round($hours, 2);

            $made       = "Total: $" . $rate * $hours . " made";
        }

        echo "<div class='text-center'>";
        echo "<p class='alert alert-success'>". $made . "</p>";
        echo "</div>";



    } else{

        echo "<div class='text-center'>";
        echo "<p class='alert alert-warning'>Nothing Calculated Yet!</p>";
        echo "</div>";
    }
}



 ?>
