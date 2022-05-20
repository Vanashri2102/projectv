<?php

$user ='root';
$password ='';
$database ='dbmsproject';
$servername = 'localhost:3309';
$conn=mysqli_connect($servername,$user,$password,$database,3309);

if(!$conn)
{
  die('Connect Error:' . mysqli_connect_error());
}

if(isset($_POST['save']))
{

  $fullname=$_POST['fullname'];
  $hostelname=$_POST['hostelname'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];
  $email=$_POST['email'];
  $mobileNO=$_POST['mobileNO'];

$sql_query ="INSERT INTO adminregister (fullname,hostelname,password,confirmpassword,email,mobileNO) values ('$fullname','$hostelname','$password','$confirmpassword','$email','$mobileNO')";

if(mysqli_query($conn ,$sql_query))
{

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <h1 style="text-align:center">Registration successful</h1>

<!--<h1>Registration successful</h1>-->
<hr style="height:2px;border-width:0;color:gray;background-color:gray">

<!--
    <form action="newuserlogin.html" method="post">
      <input type="submit" class="btn btn-primary w-100" name="save" value="LOGIN PLEASE"  />
    </form>-->
    <br>
    <br>

  </body>
</html>
<?php
}

else{
  echo"Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);





}
 ?>
