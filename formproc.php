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
$reg=$_POST["reg"];
$textInput1= $_POST["textInput1"];
$textInput2= $_POST["textInput2"];
$textInput3= $_POST["textInput3"];
$textInput4= $_POST["textInput4"];
$textInput5= $_POST["textInput5"];
$total=($textInput1)*3+($textInput2+$textInput3+$textInput4+$textInput5)*1.75;
//Opens connection to server
$dbcon = mysql_connect('localhost','root', '');
if (!$dbcon){
	die('Connection Error' .mysql_error());}
//Select database
$dbselect = mysql_select_db('classroom', $dbcon);
if(!$dbselect){
	die('Cant connect: ' .mysql_error());
}
$query="INSERT INTO `grading` (`Reg_No`,`academic`, `sports`, `art`, `music`, `other`, `total`) VALUES ('".$reg."', '".$textInput1."', '".$textInput2."', '".$textInput3."', '".$textInput4."', '".$textInput5."', '".$total."');";
$result=mysql_query($query);
echo "<h2> Thank you </h2>";
mysql_close($dbcon)
?>
<br/>
<form action="plist.php">
  <button type="submit"  style="background-color: rgb(210, 105, 0);" class="btn btn-danger">Back</button>
</form>
  <center>
</div>

</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>