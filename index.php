<?php
ob_start();
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/loginPageStyle.css">
<link rel="shortcut icon" href="images/back1.jpg">
<title> registration form </title>
</head>
<body >
	<?php
	    $err="";
	    include "connect.php";
		   if($_SERVER['REQUEST_METHOD']=="POST")
		   {
			   	$nm=$_POST['name'];
			    $sql="select password from login where name='$nm'";
			    if(!$result=$conn->query($sql))
			    	die($conn->error);
			    if($result->num_rows==0)
			    	$err="Username is wrong";
			    else
			    {
			     $row=$result->fetch_assoc();
			     if($_POST['pass']!=$row['password'])
			    	$err="Password is wrong";
			     else
			      {
			        		header('Location:second.php');
			                $_SESSION['user']='shrey';
			       }
			    }
			    
		   }

	?>
<div class="back">
 <div class="heart">
 	<img src="images/heart.png" class="heartt">
   <img src="images/heart.png" class="heartt1">
   <img src="images/heart.png" class="heartt2">
   <img src="images/heart.png" class="heartt3">
   <img src="images/heart.png" class="heartt4">
   <img src="images/heart.png" class="heartt5">
   
  <div class="form">
  	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  autocomplete="off">
    <div class="upper" >
	
	</div>
	<div class="lower">
	  <div class="err" style="color:#2F4967;"><center><?php echo $err;   ?></center></div>
	  <input type="text"  autocomplete="new-password" placeholder="love-id" class="normal-input"  name="name" maxlength="20" autofocus="of" >
	  
	  <input type="password" autocomplete="new-password" placeholder="love-Password" name="pass"  class="normal-input" required maxlength="8" >
	  <input type="image" value="Submit" class="normal-input butt" src="images/90j.png" >
	
	</div>
    
  </form>
  </div>
   <audio autoplay loop>
 
   <source src="audio/audio.mp3" type="audio/mpeg">
  </audio>
 </div>
</div>
</body>
</html>