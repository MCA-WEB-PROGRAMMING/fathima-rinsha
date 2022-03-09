<html>
    <head>
        <title>employye</title>
</head>
<body>
 <form name="myform">
    <table align="center">
    <h1 align="center">Entry Form</h1>
   <tr> <td>
     First  Name:
      </td>
    <td>
      <input type="text"name="fname"id="fname">
    </td>
    </tr>
  <tr>
    <td>Last Name</td><td>
        <input type="text" name="lname" id="lname"></td></tr>
    <td>Email id</td>
    <td><input type="email" name="email" id="email"></td>
</tr>
<tr>
    <td>password</td>
    <td><input type="password"name="pass" id="pass"></td>
</tr><tr>
<td><input type="submit"name="submit" value="submit" ></tr>
</table>
</form>
 
<?php
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $pass=$_POST['pass'];
  $email=$_POST['email'];
  $uppercase=preg_match(['@[A-Z]@'],$fname);
  $lowercase=preg_match(['@[a-z]@'],$fname);
  $Uppercase=preg_match(['@[A-Z]@'],$pass);
  $Lowercase=preg_match(['@[a-z]@'],$pass);
  $upper=preg_match(['@[A-Z]@'],$lname);
  $lower=preg_match(['@[a-z]@'],$lname);

  if($fname==""){
    echo "enter a name";
  }
  else if(!$uppercase && !$lowercase){
    echo "enter a valid name";
  }
else{
     echo "name entered";
}
if($lname==""){
  echo"enter a name";
}
else if(!$upper && !$lower){
  echo "enter a valid name";
}
else{
   echo "name entered";
}
  
if($email==""){
  echo "enter a  email";
}
if($pass==""){
  echo "enter a password";
}
else if(strlen($pass)<8){
  echo "enter a password with 8 or more characters";
}
else if(!$Uppercase || !$Lowercase){
  echo "enter a password with lower and uppercase";
}
else{
  echo"passsword entered correct";
}
}
?>
</body>
</html>
