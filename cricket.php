<html>
<head>
</head>
<body>
        
<?php
$players=array("Sachin","Dhoni","Kohli","Rohit","Jadeja","Dhawan");
echo "<table border='2' width='90'><tr><th>Sl.no</th><th>Players</th></tr>";
foreach($players as $key=>$value)
{
    echo "<tr><td>$key</td><td>$value</td></tr>";
    
}
echo "</table>";
?>
</body>
</html>