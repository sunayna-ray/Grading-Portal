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
    background-color:  rgb(28, 104, 140);
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
    <ul class="nav navbar-nav">
    <center>
      <h1>Grade</h1>
    </center>
 <?php
  $reg=$_SESSION["regno"];
  echo '<input type="text" name="reg" id="reg" class="form-control" value="';
  echo $reg.'" readonly></div>';
  ?>
</body>
</html>