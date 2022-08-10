<?php
    function calculateAge($year){
        $age = date("Y") - $year;
        return $age;
    }
    echo calculateAge(1993);
 