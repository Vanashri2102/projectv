
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
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $mobileNO=$_POST['mobileNO'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];

  if($_POST['password'] !== $_POST['confirmpassword'])
  {
    die('Password and Confirm Password should be the same');
  }

/*if (empty($_POST['username']) ||
    empty($_POST['lastname']) ||
    empty($_POST['email']) ||
    empty($_POST['mobileNO']) ||
    empty($_POST['password']) ||
    empty($_POST['confirmpassword']))
{
  die('Please fill all the fields! ');
}

*/


$sql_query ="INSERT INTO register (firstname,lastname,email,mobileNO,password,confirmpassword) values ('$firstname','$lastname','$email','$mobileNO','$password','$confirmpassword')";

if(mysqli_query($conn ,$sql_query))
{

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <br>
    <br>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

<h1 align='center' font='algerian'>REGISTRATION SUCCESSFUL</h1>
<br>

    <form action="newuserlogin.html" method="post">

      <input type="submit" class="favorite styled" name="save" value="LOGIN PLEASE"  />
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">

      <br><br>

    </form>
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
