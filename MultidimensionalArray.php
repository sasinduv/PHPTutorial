<?php
$shop = array( array("rose", 1.25 , 15),
 array("daisy", 0.75 , 25),
 array("orchid", 1.15 , 7) );
for ($row = 0; $row < 3; $row++)
{
echo "<b>The row number $row</b>";
echo "<ul>";
 for ($col = 0; $col < 3; $col++)
 {
 echo "<li>".$shop[$row][$col]."</li>";
 }
echo "</ul>";
}
?>