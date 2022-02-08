<!DOCTYPE html>
<head>
    <title>Electricity Bill</title>
</head>
<body>
    <form action="" method="POST" >
        Enter the meter number : <input type="number" name="num1" id=""><br>
        Enter the number of units : <input type="number" name="unit" id=""><br>
        Select the category : <select name="categories" id="">
            <option value="rural">Rural</option>
            <option value="residential">Residential</option>
            <option value="commercial">Commercial</option>
        </select><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $unit=$_POST['unit'];
        $tariff=$_POST['categories'];
        $e=0;
        $price=0;
        if($tariff=='rural'){
            if($unit>0 && $unit<=50){
                $e=20;
                $price=($unit*.25)+$e; 
            } 
            else if($unit>50 && $unit<=100){
                $e=20;
                $price=($unit*.55)+$e; 
            }                     
            else if($unit>100 && $unit<=200){
                $e=20;
                $price=($unit*.80)+$e; 
            }
            else if($unit>200 && $unit<=400){
                $e=20;
                $price=($unit*1.50)+$e; 
            }
            else if($unit>400){
                $e=20;
                $price=($unit*2)+$e; 
            } 
        }
        if($tariff=='residential'){
            if($unit>0 && $unit<=50){
                $e=35;
                $price=($unit*1.35)+$e; 
            } 
            else if($unit>50 && $unit<=100){
                $e=35;
                $price=($unit*2.15)+$e; 
            }                     
            else if($unit>100 && $unit<=200){
                $e=35;
                $price=($unit*3)+$e; 
            }
            else if($unit>200 && $unit<=400){
                $e=35;
                $price=($unit*3.5)+$e; 
            }
            else if($unit>400){
                $e=35;
                $price=($unit*6)+$e; 
            } 
        }
        if($tariff=='commercial'){
            if($unit>0 && $unit<=50)
            {
                $e=65;
                $price=($unit*3)+$e; 
            } 
            else if($unit>50 && $unit<=100){
                $e=65;
                $price=($unit*4.5)+$e; 
            }                     
            else if($unit>100 && $unit<=200){
                $e=65;
                $price=($unit*6.0)+$e; 
            }
            else if($unit>200 && $unit<=400){
                $e=65;
                $price=($unit*7.2)+$e; 
            }
            else if($unit>400){
                $e=65;
                $price=($unit*9)+$e; 
            }  
        }
        echo"Your meter  Number is : ".$num1;
        echo"<br>";
        echo"extra charges are : ".$e;
        echo"<br>";
        echo"Unit : ".$unit;
        echo"<br>";
        echo"Tariff category : ".$tariff;
        echo"<br>";
        echo"Total charge for (".$unit.") : ".$price;
    }
?>