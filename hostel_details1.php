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
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $email=$_POST['email'];
    $phoneno=$_POST['phoneno'];
    $college=$_POST['college'];
    $yearofstudy=$_POST['yearofstudy'];
    $sql_query="INSERT INTO tb1_info(fullname,gender,address,pincode,emailid,phoneno,collegename,yearofstudy)VALUES('$name','$gender',' $address','$pincode',' $email',' $phoneno','$college',' $yearofstudy')";
   // $sql_query="INSERT INTO tb1_info(name,gender,address,pincode,email,phoneno,college,yearofstudy)VALUES('$name','$gender',' $address',' $email','$pincode',' $phoneno','$college',' $yearofstudy')";

    if(mysqli_query($conn,$sql_query))
    {
        echo " New details entry inserted successfuly !";
    }
    else
    {
        echo " error :" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
