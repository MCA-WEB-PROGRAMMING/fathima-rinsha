<?php
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $s=array('Farhana','Ayisha','Nourin','Binoy','Nikila','Adarsh','Bincy');
    echo "Array of students: <br>";
    print_r($s);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Sorted array of students: <br>";
    asort($s);
    print_r($s);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "sorted Array of students by using 'arsort': <br>";
    arsort($s);
    print_r($s);


?>