<?php
    $marks = 69;
    if ( $marks > 50) {
        echo "Pass<br>";

    }else{
        echo "Fail<br>";
    }

    if ($marks >= 75){
        echo "Grade: A";
    }elseif ($marks >= 65){
        echo "Grade: B";
    }elseif ($marks >= 55){
        echo "Grade: C";    
    }elseif ($marks >= 35){
        echo "Grade: S";
    }else{
        echo "Grade: F";
    }
?>