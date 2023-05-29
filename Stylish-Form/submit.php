<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="style2.css">
  <title> Thank You </title>
</head>


<center>
  <div class="checkmark-circle">
    <div class="background"></div>
    <div class="checkmark draw"></div>
  </div>
  <H1> Thank You for Joining </H1>
</center>

<pre>
<?php
$data_file=fopen("example.txt", "w");

    $First_Name =$_POST["firstname"];
    $Last_Name =$_POST["lastname"];
    $Gender =$_POST["gender"];
    $country_code =$_POST["country_code"];
    $Phone_Number =$_POST["phone"];
    $Email_Id =$_POST["email"];
    $Password =$_POST["psw"];

$text_to_write= "First_Name : ". $First_Name."\n"."Last_Name : ".$Last_Name."\n"."Gender : ".$Gender."\n"."country_code : ".$country_code."\n".
"Phone_Number : ".$Phone_Number."\n"."Email_Id : ".$Email_Id."\n"."Password: ". $Password;


fwrite($data_file,$text_to_write);
fclose($data_file);
?>


</pre>

</html>
