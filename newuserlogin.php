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




$query1="SELECT * from register where email='$email' and password='$password' ";
if ($result = mysqli_query($var_connection, $query1))

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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      </head>
      <body>

          <br >
        <br >

        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <!--    <h1 style="text-align:center">LOGIN SUCCESSFUL</h1>-->
          <h1 align='center' font='algerian'>LOGIN SUCCESSFUL</h1>

    <!--<h1>Registration successful</h1>-->
  <br >

  <form action="hosetl.html" method="post">

  <input class="favorite styled" type="submit" value="CHECK STATUS" align=center  >
    <!--  <input type="button" class="btn btn-primary w-100" name="save" value=""  />-->

    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <br >

        </form>
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
