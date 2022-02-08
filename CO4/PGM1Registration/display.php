<?php
  include('config/constants.php');
?>
<html>
    <head>
        <title>display list</title>
    </head>
<body>
<div class="all-lists">
<table border="10">
<tr>
    <th>Sno</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile no</th>
    
</tr>

<?php


$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
$db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

$sql="SELECT name,email,mob FROM reg";
$res=mysqli_query($conn,$sql);

if($res==true)
{
   
    $count_rows=mysqli_num_rows($res);
    $sn=1;


    if($count_rows>0)
    {
         while ($row=mysqli_fetch_assoc($res))
         {
             //getting data from database
             $name=$row['name'];
             $email=$row['email'];
             $mob=$row['mob'];
           

             ?>
             <tr>
               <td><?php echo $sn++;?></td>
               <td><?php echo $name;?></td>
               <td><?php echo $email;?></td>
               <td><?php echo $mob;?></td>
             
             </tr>
             <?php
         }
    }
    else 
    {
      //no data in database
      ?>
      <tr>
          <td colspan="4">No data is added yet.</td>
      </tr>
      <?php  
    }
}
?>


</table>

</div>
<a href="form.php">Register here</a>
</body>
</html>