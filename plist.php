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
  <h1>List of Students</h1><br/>
  <div class="container">
  </table>
  <?php
  //Opens connection to server
  $dbcon = mysql_connect('localhost','root', '');
  if (!$dbcon){
    die('Connection Error' .mysql_error());}
  //Select database
  $dbselect = mysql_select_db('classroom', $dbcon);
  if(!$dbselect){
    die('Cant connect: ' .mysql_error());
  }
  $query="SELECT Reg_No from student";
  $data=mysql_query($query);
  echo '<table class="table table-responsive table-condensed table-hover">
  <tr ><th> Register No. </th><th> Form Status </th><th> Total </th></tr>';
  while($record=mysql_fetch_array($data)){
    $reg=$record["Reg_No"];
    $query2="SELECT total FROM `grading` WHERE Reg_No='".$record["Reg_No"]."'"; 
    $data2=mysql_query($query2);
    $record2=mysql_fetch_array($data2);
    if(!$record2){
		echo '<tr class="danger"><td>'.$reg.'</td><td><a href="formad.php?reg_no='.$reg.'">Pending</a></td><td>NA</td></tr>';
    }else{
      echo '<tr class="success"><td>'.$reg.'</td><td>Submitted</td><td>'.$record2['total'].'</td></tr>';
    }
  }
  echo "</table><br/><br/>";
  mysql_close($dbcon);
  ?>
  <form action="admin_index.php">
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