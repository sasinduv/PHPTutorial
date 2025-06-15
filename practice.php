<?php
    $colors = array("Red","Green","Blue");
    echo "Colors are " .$colors[0]. "," .$colors[1]." and " .$colors[2].".";
    echo "<br/>";
    $array = array('abc','a',100,200);
    print "first ".$array[0]." second ".$array[1]." third ".$array[2]." forth ".$array[3]; 
    echo "<br/>";
    $fruits = array("Apple","Banana","Cherry");
    $fruits[] = "Orange";

    echo "$fruits[1]";
    echo "<br/>";

    $numbers = range(1,10);
    echo $numbers[1];
    echo "<br/>";
    $odds = range(1,10,2);
    echo $odds[3];
    echo "<br/>";

    $products=array('Tires','Oil','Spark Plugs');
    echo $products[0];
    echo $products[1];
    echo $products[2];
    echo "<br/>";
    for ($i=0;$i<3;$i++)
    {
        echo "$products[$i]";
    }
    
    echo "<br/>";
    $table = array("Fry"=>"slurm","Leela"=>"PlanEx3011");
    $usernames = array_keys($table);
    $passwds = array_values($table);
    echo $usernames[0]." pwds ".$passwds[0];
    echo "<br/>";
    $array = array(0 => 100, "color" => "red");
    print_r(array_keys($array));
    $array = array("blue", "red", "green", "blue", "blue");
    print_r(array_keys($array, "blue"));
    $array = array("color" => array("blue","red", "green"),"size" => array("small", "medium","large"));
    print_r(array_keys($array));
    echo "<br/>";

    //2D array

    $cars = array (array("Volvo",22,18),array("BMW",15,13),array("Saab",5,2),array("Land Rover",17,15));

    echo $cars[0][0].":In stock ".$cars[0][1].",sold: " .$cars[0][2].".<br>";
    echo $cars[1][0].":In stock ".$cars[1][1].",sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    echo "<br>";
    for ($row = 0; $row < 4; $row++){
        for ($column = 0; $column < 3; $coliumn++){
            echo '|'.$cars[$row][$column];
        }
        echo '|<br/>';
    }

?>