<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>DevFest'17</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
  body{
    background-color: rgb(28, 104, 140);
  }
  .active{
    background-color: #B8BAFF;
  }
  h1, h2, h3{
    color: #232C65;
  }
  </style>
  </head>
  <body>
  <div class="container-fluid">

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><img class="img-rounded img-responsive" src="Images/Logo.png" alt="Logo"></a>
    </div>
  </div>
</nav>
<div class="jumbotron container-fluid">
<center>
<?php 
$user=$_POST["user"];
$pass= $_POST["pass"];
$_SESSION["regno"] = $user;
//Opens connection to server
$dbcon = mysql_connect('localhost','root', '');
if (!$dbcon){
	die('Connection Error' .mysql_error());}
//Select database
$dbselect = mysql_select_db('classroom', $dbcon);
if(!$dbselect){
	die('Cant connect: ' .mysql_error());
}if(!$pass){
	echo "<h2>Incorrect Login Credentials</h2><h3>Please try again.</h3>";
}else{
$query="SELECT Password FROM student WHERE Reg_No = '".$user."'";
$result1=mysql_query($query);
$arr_sa = mysql_fetch_row($result1);
$result = $arr_sa[0];
/*if ($user == "Faculty" && $pass == "1234")
{
header("Location: plist.php");
}
else*/
if(!$result){
  echo "<h2>Incorrect Login Credentials</h2><h3>Please try again.</h3>";
}
elseif($pass==$result){
header("Location: student_view.php");
}
else{
  echo "<h2>Incorrect Login Credentials</h2><h3>Please try again.</h3>";
}}
mysql_close($dbcon)
?><br/>
<form action="index.php">
  <button type="submit" class="btn btn-danger" style="background-color: rgb(210, 105, 0);">Back</button>
</form>
  <center>
</div>

</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>