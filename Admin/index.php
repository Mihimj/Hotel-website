<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ADMIN Login</title>
  
  
     
      <link rel="stylesheet" href="css/style.css">

  
  
  <?php
$con=mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,"mihir");
?>

<!DOCTYPE html>
  <html lang="en">
  <head>



    <title>Hotels Bookings</title>
      <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/jpg" href="C:\Users\MIHIR KUMAR JHA\Desktop\project\pics\images.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mj.css">
    <script src="jmj.js"></script>
    <script src="mj.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


body{
	
  background-color:#0f0f0f;
}
h1{
	margin-top:30px;
  text-align: center;
  font-size: 70px;
  color: #00b33c
}
.forgot{
	
	
	text-align:center;
}

.box{
	position:absolute;
top:-200px;
	left:450px;
	margin:auto;
}




</style>



  
</head>

<body>


  <h1>Welcome Back!</h1>

   <br>
   


	
 <div class="container">


  
      <div id="login">

        <form method="post">

          <fieldset class="clearfix">
<div class=" box">
	<br>
	<br>	<br>
	<br>
            <p><span class="fontawesome-user"></span><input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" name="sub"  value="Login"></p>
			
			
        

			  <p class="forgot" "><a href="../index.php" style="color:cyan;" >Forgot Password?</a></p>
  <br>
  <br
</div>  </fieldset>

        </form>
		       

       </div>
 <!-- end login -->

   
  
  
</body>
</html>

<?php
   include('db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['user'] = $myusername;
         
         header("location: home.php");
      }else {
		  
		  
		 header( "Location:fail.php" ); die;
}
     
      
   }
?>
