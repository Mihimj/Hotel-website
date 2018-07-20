<?php
$con=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,"mihir");
?>


<html>



<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="mj.css">
  <script src="jmj.js"></script>
  <script src="mj.js"></script>

  <style>


#back {
  width: 50px;
  position: absolute;
  top: 580px;
  left: 700px;
}


a{
  text-decoration: none;
    background-color:#0f0f0f;
}
.q{
position: absolute;
 width: 470px;
 length: 470px;
top: 200px;
left: 500px;
}
.r{
  width:60px;
  length:60px;
  background-color:#0f0f0f;
}
body{

  background-color:black;
}

h1{
  color: red;
   text-align: center;}

</style>

</head>



<body>

<h1> WRONG PASSWORD !!!!

<img src="../pics/mj.jpg" class="q"></h1>
<br>
<br>


<div id="back">

<a href="index.php"> <img src="..\pics\hm.jpg" class="r"> </a>


</div>

</body>

</html>
