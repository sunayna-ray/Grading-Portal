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
    <ul class="nav navbar-nav">
    <center>
      <h1>Grading Form</h1>
    </center>
    </ul>
  </div>
</nav>
<div class="jumbotron container-fluid"> 
  <h2>Note:</h2>
  <h5><b>In this form a rating of 0 (leftmost) is of the lowest grade and 10 (rightmost) of highest. 30% weightage is given to academic grade and 70% to the sum total of otheer grades.</b></h5></div>
<div class="jumbotron container-fluid"> 
  <h2><u>Form</u></h2><br>
  <form action="formproc.php" method="POST" data-toggle="validator"> 
  <div class="form-group form-inline row"><label for="reg" style="padding-right: 183px;">Registeration Number:</label>   
  <?php
  $reg=$_GET["reg_no"];
  echo '<input type="text" name="reg" id="reg" class="form-control" value="';
  echo $reg.'" readonly></div>';
  ?>
  <div class="form-group form-inline row"> <label for="textInput1">What grade does the student deserve for his academic performance?</label> 
  <div class="row">
  <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput1(this.value);"></div> 
  <input type="text" id="textInput1" name="textInput1" pattern="^\d{1,2}$" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput2">What grade does the student deserve for his performance in sports?</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput2(this.value);"></div>
      <input type="text" id="textInput2"  pattern="^\d{1,2}$" name="textInput2" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput3">What grade does the student deserve for his skills in art and craft?</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput3(this.value);"></div>
      <input type="text" id="textInput3"  pattern="^\d{1,2}$" name="textInput3" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput4">What grade does the student deserve for his skills in music?</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput4(this.value);"></div>
      <input type="text" id="textInput4"  pattern="^\d{1,2}$" name="textInput4" value="5" class="form-control" required></div></div>

  <div class="form-group form-inline row"> <label for="textInput5">What grade does the student deserve for his additional learning experience?</label> 
    <div class="row">
      <div class="col-sm-3"> <input type="range" name="rangeInput" min="0" max="10" onchange="updateTextInput5(this.value);"></div>
      <input type="text" id="textInput5"  pattern="^\d{1,2}$" name="textInput5" value="5" class="form-control" required></div></div>

  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  function updateTextInput1(val) {
          document.getElementById('textInput1').value=val; 
        }
  function updateTextInput2(val) {
          document.getElementById('textInput2').value=val; 
        }
  function updateTextInput3(val) {
          document.getElementById('textInput3').value=val; 
        }
  function updateTextInput4(val) {
          document.getElementById('textInput4').value=val; 
        }
  function updateTextInput5(val) {
          document.getElementById('textInput5').value=val; 
        }
</script>

</body>
</html>