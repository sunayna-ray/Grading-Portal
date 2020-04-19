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
  h1{
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
  <h1>Your Grades</h1><br/>
  <div class="container">
  </table>
   <?php
  $reg=$_SESSION["regno"];
  //Opens connection to server
  $dbcon = mysql_connect('localhost','root', '');
  if (!$dbcon){
    die('Connection Error' .mysql_error());}
  //Select database
  $dbselect = mysql_select_db('classroom', $dbcon);
  if(!$dbselect){
    die('Cant connect: ' .mysql_error());
  }
  echo '<table class="table table-responsive table-condensed table-hover">
  <tr ><th> Academics </th><th> Sports </th><th> Art </th><th> Music </th><th> Additional </th><th> Total </th></tr>';
  $query="SELECT * FROM `grading` WHERE `Reg_No`='".$reg."'"; 
  $data=mysql_query($query);
  $record=mysql_fetch_array($data);
  if(!$record){
	echo '<tr class="danger"><td></td><td></td><td>Yet to be Uploaded.</td><td></td><td></td><td></td></tr>';
  }
  else{
	  echo '<tr class="success"><td>'.$record['academic'].'</td><td>'.$record['sports'].'</td><td>'.$record['art'].'</td><td>'.$record['music'].'</td><td>'.$record['other'].'</td><td>'.$record['total'].'</td></tr>';
  }
  echo "</table><br/><br/>";
  mysql_close($dbcon);
  ?>
  <form action="index.php">
  <button type="submit" class="btn btn-danger">Back</button>
</form>
  </div>
  <center>
</div>

</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>