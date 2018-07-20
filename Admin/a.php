<?php
$con=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,"mihir");
?>



<html>
<head>


<title> Thanks
</title>


<style>


body{
  background-color:#0f0f0f;
}
h1{
  text-align: center;
  font-size: 70px;
  color: #00b33c;
  	margin-top:300px;
}


#r
{ text-align: center;


}

a{
text-decoration:none;
color:#337ab7;
}

</style>


</head>


<body>


<h1>

Thanks For  Booking !!!!!!!
</h1>

<br>


  <div id="r">
      <a href="../index.php"> Go Back to Home</a>
    </div>
</body>












</html>