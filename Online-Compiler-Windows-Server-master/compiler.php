<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EBOOKARO.COM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/dinu.jpg">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>





</head>
<body background="img/hvbh.png">

<div class="main">

  <div class="row">
  <div class="col-sm-10">
  <nav class="navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand lspace" href="home.php">Codementee.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
	<li class="space"><a href="https://www.ebookaro.com/"><i class="fa fa-code ispace"></i>ebookaro</a></li>
        <li class="space"><a href="https://www.ebookaro.com/forum-1/general-discussions"><i class="fa fa-code ispace"></i>Discussion & doubts</a></li>
	<li class="space"><a href=" "></i> </a></li>
	<li class="space"><a href=" "></i> </a></li>
	<li class="space"><a href=" "></i> </a></li>
	<li class="space"><a href=" "></i> </a></li>
	<li class="space"><a href=" "></i> </a></li>
        <li class="space"><a href=" "></i> </a></li>
	

    <ul class="nav navbar-nav">

<form action="compile.php" id="form" name="f2" method="POST" >
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>
<option value="python2.7">python2.7</option>
<option value="python3.2">python3.2</option>


</select><br>
    
      
    </ul>
  
</nav>
</div>
</div>

<div class="row log">
<div class="col-sm-10">

</div>

<div class="col-sm-1">

</div>

<div class="col-sm-1">
  
</div>

</div>




<div class="row">
<div class="col-sm-6">
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >






<label for="ta">Write Your Code</label>
<textarea class="form-control" id="stdinput" placeholder="/******************************************************************************

Welcome to Codementee.com 
Codementee.com is an online compiler and debugger tool for C, C++, Python, Java
Code, Compile and Run online

*******************************************************************************/" name="code" rows="20" cols="90"></textarea><br><br>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">

<label for="in"> Enter Your Input</label>
<textarea class="form-control" id="stdinput" placeholder="Enter input to program here" name="input" rows="4" cols="10"></textarea><br>
<input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br>


</form>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Compiling ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>

<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="40"></textarea><br><br>

<!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
<!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->




</div>
</div>

<div class="col-sm-4">

  
</div>
</div>
</div>
</div>

<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
<!-- BEGIN: Powered by Supercounters.com -->

</center>
<!-- END: Powered by Supercounters.com -->

</div>

<div class="col-sm-5">


<div class="fm">

<b>Developed By ebookaro.com</b>

</div>
</div>


<div class="col-sm-4">
<?php



?>
</div>
</div>
</div>
</div>
</body>
</html>


