<?php
ob_start();
session_start();
if(!isset($_SESSION['user']))
header('Location:index.php');
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="images/back1.jpg">
	<title>Luv U Frvr</title>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="css/secondPage.css">

</head>
<body>
<div class="bkgrnd">
    <div class="upper-back">
    	
    </div>
    <center>
    	<div class="center-slider">
    	 <div class="back1">
    	 	
    	 </div>
       </div>
    </center>
	<div class="blank">
		
	</div>
</div>

<div class="bkgrnd2">
	<div class="pics">
		<div class="float">
			<img src="ak/akhil1.jpg" class="change-img fade" alt="akhil1">
			<img src="ak/akhil2.jpg" class="change-img fade" alt="akhil2">
			<img src="ak/akhil3.jpg" class="change-img fade" alt="akhil3">
			<div class="overlay">I</div>
		</div>
        <div class="float">
        	<img src="ak/akhil4.jpg" class="change-img1 fade" alt="akhil2">
        	<img src="ak/akhil5.jpg" class="change-img1 fade" alt="akhil3">
        	<img src="ak/akhil10.jpg" class="change-img1 fade" alt="akhil1">
        	<div class="overlay">LoVe</div>
        </div>
        <div class="float">
        	<img src="ak/akhil7.jpg" class="change-img2 fade" alt="akhil3">
        	<img src="ak/akhil8.jpg" class="change-img2 fade" alt="akhil1">
			<img src="ak/akhil9.jpg" class="change-img2 fade" alt="akhil2">
			<div class="overlay">YoU</div>
        </div>
	</div>
  
</div>

 
<div class="bkgrnd3">
		<div class="blank" style="position: relative;top: -40px;">
			<center>
			<div class="heart-container">
		<img src="images/love.png" alt="love" class="love-heart">
		     </div>
		</center>
		</div>
</div>
   
<div class="days-container" >
			<div class="days-heading">
				These are the special moments according to  our valentine week
			</div>
			<div class="days-video">
				<div class="row-days">
					<div class="col-days" id="myVideo1">
						<video  class="video" controls poster="images/rose.jpg">
                        <source src="videos/roseday.mp4" type="video/mp4">
                        </video>
						
					</div>
					<div class="col-days" id="myVideo2">
						<video  class="video" controls poster="images/hug.png">
                        <source src="videos/hugday.mp4" type="video/mp4">
                        </video>
					</div>
					<div class="col-days" id="myVideo3">
						<video  class="video" controls poster="images/kiss.png">
                        <source src="videos/kissday.mp4" type="video/mp4">
                        </video>
					</div>
					
				</div>

				<div class="row-days">
					<div class="col-days" id="myVideo4">
						<video  class="video" controls poster="images/teddy.jpg">
                        <source src="videos/teddyday.mp4" type="video/mp4">
                        </video>
						
					</div>
					<div class="col-days" id="myVideo5">
						<video  class="video" controls poster="images/chocolate.jpg">
                        <source src="videos/chocolateday.mp4" type="video/mp4">
                        </video>
					</div>
					<div class="col-days" id="myVideo6">
						<video  class="video" controls poster="images/promise.jpg">
                        <source src="videos/promiseday.mp4" type="video/mp4">
                        </video>
					</div>
					
				</div>
				<div class="row-days">
					<div class=" col-days center-video" id="myVideo7">
						<video  class="video" controls poster="images/Propose.jpg">
                        <source src="videos/proposeday.mp4" type="video/mp4">
                        </video>
						
					</div>
					
					
				</div>


			</div>
</div>






<script type="text/javascript" src="js/PersonalSlider.js">
	
	</script>
</body>
</html>