<?php
$user ='root';
$password ='';
$database ='dbmsproject';
$servername = 'localhost:3309';

$var_connection=mysqli_connect($servername,$user,$password,$database,3309);
if(!$var_connection)
{
  die('Connect Error:' . mysqli_connect_error());
}


if(isset($_POST['save']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];




$query2="SELECT * from adminregister where email='$email' and password='$password' ";
if ($result = mysqli_query($var_connection, $query2))

{
  $count=mysqli_num_rows($result);
  if($count ==1){
  //  echo "Login Successful";
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
      <style>
div {
  border: 1px solid black;
  background-color: lightblue;
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}
</style>

    </head>
    <body>
      <br >
      <br >
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">

      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <h1 style="text-align:center">LOGIN SUCCESSFUL</h1>

  <!--<h1>Registration successful</h1>-->
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">

  <br >
  <br >

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
echo"Incorrect password or email";

  }
  }

  else{
    echo "Error: " . $sql . "" > mysqli_error($var_connection);
  }

  mysqli_close($var_connection);
}

 ?>
