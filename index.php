<?php
include('db.php');
?>

<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



    <title>Hotels Bookings</title>

    <link rel="icon" type="image/jpg" href="./pics/images.jpg">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="mj.css">

    <script src="jmj.js"></script>
    <script src="mj.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    body{
      font-size: 30px;
    }
.btn btn-dange{

     background-color:red;
      }
      .btn btn-success{
        background-color:green;
      }
      body{

        background-color: #0f0f0f;
      }



.navbar {
   background-color: black;
opacity:0.6;
}

.navbar-inner a { color:white;}

.navbar:hover{
  background-color: black;;
}

.navbar-nav>li>a {
     font-size:20px;
     color:#fff;
 }
 .dropdown-menu
 {
   color: white;
   background-color: #0f0f0f;
 }
 .dropdown-menu>li>a
 {
   color:white;
 }
.modal-body  {
  background-color:#383838;
  color:white;
padding:28px;}
.modal-title{
  background-color:#262626;
  color:white;
}
.modal-footer{
    background-color:#262626;
}
.modal-header {
  padding:0px;
}

.navbar:hover{
  background-color: black;
}


footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
i{
  font-size: 30px;
  margin-top: 20px;
  color: darkred;
  padding-left: 10px;
}
.thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
    height:auto;
}

.thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;}

    #book{
height: 500px;
    }
    #about{
      background-color: #0f0f0f;
      margin-top: 20px;
      padding-top:30px;
      letter-spacing: 1px
      font-family:Amatic SC, monospace,sans-serif;
    }


    </style>
  </head>
  <body>

  <nav class="navbar navbar-inverse navbar-fixed-top">


          <div class="navbar-inner">
            <div class="container-fluid">
      <div class="navbar-header">
          <link rel="icon" type="image/jpg" href="./pics/images.jpg">
        <a class="navbar-brand" href="anew.html"></a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#myCarousel">Home</a></li>
        <li><a href="#qw">Bookings</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#menu">Resturants</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#mj">Social</a></li>
          </ul>
        </li>
<a href="./Admin/index.php"> <button class="btn btn-danger">Login  </button></a>
      </ul>
    </div>
</div>
  </nav>
<!--................................................. caurpsel ka part.................................-->
  <div class="container-fluid">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      </ol>


      <div class="carousel-inner">

        <div class="item">
          <img src="./pics/c0.jpg" alt="" style="width:100%;">
          <div class="carousel-caption">
            <h3></h3>
            <p></p>
          </div>
        </div>

        <div class="item">
          <img src="./pics/c1.jpg" alt="" style="width:100%;">
          <div class="carousel-caption">
            <h3></h3>
            <p></p>
          </div>
        </div>

        <div class="item active">
          <img src="./pics/c2.jpg" alt="" style="width:100%;">
          <div class="carousel-caption">
            <h3></h3>
            <p></p>
          </div>
        </div>

      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  



  

<div class="container text-center" id="about">
  <div class="content">
    <h1 style="font-size: 90px; margin-bottom: 100px;">About</h1>

    <img src="./pics/stars-1233271.jpg" style="width:50%; text-align:center; margin-bottom: 110px;">
    <p>WORLD OF RADISSON
The World of Radisson is a range of defining features tailored to the needs of busy travelers. It is a round the clock range of guest touch point communication tools, physical attributes and services that make Radisson one of the world’s leading full service hotel brands. It's all about treating every guest in the way they’d expect and deserve to be treated.

The Extra Thoughtful Care applied to every aspect of the Radisson experience is what allows it to achieve and maintain such high levels of service. It’s evident from the very moment guests discover Radisson to the arrival outside the front door beneath the distinctive logo.

DEVELOPMENT OPPORTUNITIES

A proud heritage of big-hearted, upscale hospitality now reinvented and re-invigorated for the 21st century.

JOIN THE FAMILY &gt;
THE PLACE TO BE

Find the perfect locale for your next trip, whether for business or pleasure.

EXPLORE LOCATIONS &gt;
SAVE UP TO 20%

There's no time like now to book your next trip  The Restaurant was founded in blabla by Mr. Italiano in 1997, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p><strong>The Head Chef</strong> Mr. Italiano himself    <br> <br>
<br>
       <img src="./pics/450070971.jpg" style="width:150px" class="img-circle" alt="Chef"></p>
<br>
    <br>
    <p>We are proud of our interiors.</p>
    <img src="./pics/m.jpg" style="width:100%" class="img-thumbnail" alt="Restaurant">
    <h1><b>Opening Hours</b></h1>

    <div class="row">
      <div class="col-sm-6">
        <p>Mon 10.00 - 24.00 </p>
        <p>Tue 10.00 - 24.00 </p>
        <p>Wednesday 10.00 - 24.00</p>
        <p>Thursday 10:00 - 24:00</p>
      </div>
      <div class="col-sm-6">
        <p>Friday 10:00 - 12:00</p>
        <p>Saturday 10:00 - 23:00</p>
        <p>Sunday 10:00 - 12:00</p>
      </div>
    </div>
  </div>
</div>




  <button type="button" class="btn btn-warning btn-block" data-toggle="collapse" data-target="#demo" style="padding 0px; margin-top: 40px;" aria-expanded="true"><h2>Most Popular Hotel Destinations</h2></button>
  <div id="demo" class="collapse in" aria-expanded="true">

<p style="margin-top:50px; text-align:center;">New York City,
  NY,  US 	 San Francisco,  CA,  US 	 Los Angeles,  CA,<br>
   US Vancouver ,  CA  	Seattle,  WA,  US 	Calgary, CA Minneapolis,<br>
    MN, US 	Salt Lake City, UT, US 	Dallas, TX, US Orlando, FL, US 	Mexico City, <br>
    MX 	Santiago, CL Sydney, AU 	Shanghai, CN 	New Delhi, IN
</p>
</div>






<div class="container-fluid" id="menu">
  <div class="jumbotron text-center" style="background-color:#0f0f0f; color: white;">
    <h1 style="color: white;">MENU</h1>

<div class="container" style="background-color:#0f0f0f;">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default" style="border:0px;">
      <div class="panel-heading" style="background-color:#0f0f0f; color: white;">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" class="collapsed"><h2 style="background-color:MediumSeaGreen; color: white;">Staters</h2></a>
        </h4>

    </div>
      <div id="collapse1" class="panel-collapse collapse" style="background-color: rgb(15, 15, 15); color: grey; height: 0px;" aria-expanded="false">

        <div class="panel-body"><h3><b>Margherita</b>₹399</h3>
        <p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
        <hr>

        <h3><b>Formaggio</b> ₹499</h3>
        <p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
        <hr>

        <h3><b>Chicken</b> ₹299</h3>
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
        <hr>

        <h3><b>Pineapple'o'clock</b> ₹899</h3>
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
        <hr>

        <h3><b>Meat Town</b> &gt;Hot!₹289</h3>
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, chicken</p>
        <hr>

        <h3><b>Parma</b> <span class="w3-tag w3-grey w3-round">New</span>₹499</h3>
        <p class="w3-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
      </div>
<hr>
      <div id="Pasta">
        <h3><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> ₹999</h3>
        <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p></div>
      </div>
    </div>
    <div class="panel panel-default" style="border:0px;">
      <div class="panel-heading" style="background-color:#0f0f0f; color: white;">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false"><h2 style="background-color:SlateBlue; color: white;">Main Course</h2></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse" style="background-color:#0f0f0f; color: grey;" aria-expanded="false">
        <div class="panel-body"><h3><b>Ravioli</b> ₹600</h3>
        <p class="w3-text-grey">Ravioli filled with cheese</p>
        <hr>

        <h3><b>Spaghetti Classica</b>  ₹350</h3>
        <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
        <hr>

        <h3><b>Seafood pasta</b> ₹650</h3>
        <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
        <hr>
      </div>


      <div id="Starter">
        <h3><b>Today's Soup</b>Seasonal ₹299</h3>
        <p class="w3-text-grey">Ask the waiter</p>
<hr>

        <h3><b>Bruschetta</b></h3>
        <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
        <hr>

        <h3><b>Garlic bread</b> ₹450</h3>
        <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
        <hr>

        <h3><b>Tomozzarella</b>  ₹250</h3>
        <p class="w3-text-grey">Tomatoes and mozzarella</p></div>
      </div>
    </div>

    <div class="panel panel-default" style="border:0px;">
      <div class="panel-heading" style="background-color:#0f0f0f; color: white;">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false"><h2 style="background-color:Tomato; color: white;">Sweet Section</h2></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse" style="background-color:#0f0f0f; " aria-expanded="false">
        <div class="panel-body" style="background-color:#0f0f0f; color:grey;">
          <h3><b>Choco palter</b> ₹950</h3>
          <p>Dark chco, dairy Milk</p>
          <hr>
          <h3><b>Pannacorta</b> ₹250</h3>
          <p> Apple curd, Strawberry,Blueberry</p>
          <hr>
          <h3><b>Caramell Pudding</b> ₹450</h3>
          <p>caramell, coco powder</p>
          <hr>
          <h3><b>Lava cake</b> ₹750</h3>
          <p>Dark coco, Bread</p>
</div>
</div>
</div>
</div>

</div>
</div>

<div id="qw">
    <h2 style="text-align:center;color:white;">BOOKING</h2>
    <p style="text-align:center; color:white;">Make yourself at home is our slogan. We offer the best beds in the industry. Sleep well and rest well.</p>
  </div>
  <br><br>
  <br>
  <div class="container-fluid" id="rooms">
  <div class="row">
    <div class=" col-sm-3">
      <label><i class="fa fa-calendar-o"></i> Check In</label>
      <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY">
    </div>
    <div class=" col-sm-3">
      <label><i class="fa fa-calendar-o"></i> Check Out</label>
      <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY">
    </div>
    <div class=" col-sm-3 ">
      <label><i class="fa fa-male"></i> Adults</label>
      <input class="w3-input w3-border" type="number" placeholder="1">
    </div>
    <div class=" col-sm-3">
      <label><i class="fa fa-child"></i> Kids</label>
      <input class="w3-input w3-border" type="number" placeholder="0">
    </div>
    <br>
    <br>
    <br>
    <br><br>

    <button type="submit" style="position:absolute; left:700px;" class="btn btn-danger"> Search </button>

  <br>
    <br>
      <br>

        <div class="container-fluid text-center bg-black" <br="">
        <br>


          <h2 style="font-size: 50px;">OUR ROOMS</h2>

          <h4>Best in Class</h4>
          <br>
          <div class="row text-center">
            <div class="col-sm-4">
              <div class="thumbnail">
                  <img src="./pics/t.jpg" alt="single">
                  <h3>Single Room</h3>
                  <h5 style="background-color:#b3b3ff ;">From ₹2999</h5>
                  <p>Single bed</p>
                  <p>15m<sup>2</sup></p>
                  <p class="sym"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
                  <button type="button" class="btn btn-info"><a href="./Admin/reservation.php" style="text-decoration:none;color:white">Choose Room</a></button>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">

                <img src="./pics/rooms.jpg" alt="double">
                <h3>Double Room</h3>
                <h5 style="background-color:#b3b3ff ;">From ₹3149</h5>
                <p>Queen-size bed</p>
                <p>25m<sup>2</sup></p>
                <p class="sym"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
                <button type="button" class="btn btn-info"><a href="./Admin/reservation.php" style="text-decoration:none; color:white;">Choose Room</a></button>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">

                <img src="./pics/d.jpg" alt="Delux">
                <h3>Deluxe Room</h3>
                <h5 style="background-color:#b3b3ff ;">From ₹5199</h5>
                <p>King-size bed</p>
                <p>40m<sup>2</sup></p>
                <p class="sym"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
                <button type="button" class="btn btn-info"><a href="./Admin/reservation.php" style="text-decoration:none;
                  color:white;">Choose Room</a></button>
              </div>
            </div>
        </div>






</div></div></div></div>




<br>
<br>

				
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  <!-- visitors -->
<!-- contact -->

<section class="contact-w3ls" id="contact" style="text-align:center;">
	<div class="container" style="text-align:center;">
		<div class="col-lg-12 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits" style="text-align:center;">
				<h2>Contact Us</h2>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
				
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>
			</div>

			
		</div>
	
</section>
<!-- /contact -->
			<footer id="mj">
      <h2>Find Us On</h2>
    <i class="fa fa-facebook-official"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-snapchat"></i>
    <i class="fa fa-pinterest-p"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-linkedin"></i>
    <br>
    <br>

<p> Created by:- Mihir Jha</p>
</footer>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


