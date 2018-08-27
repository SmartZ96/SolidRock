<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="The Solid Rock Cafe is a facility to break people free from their addictions and place their trust in God." />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
	</script>

<title>Conatct Us</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>


</head>

<body>
<div id="wrapper">
	<div id="header">
<a href="index.html"><img src="img/logo.png" alt="" height="100" width="100" class="logo"/></a>
<nav>

	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="stories.html">Stories</a></li>
		<li><a href="gallery.html">Gallery</a></li>
		<li><a href="">Contact</a></li>
	</ul>
	
	<div class="handle"><img src="img/nav-icon.png" alt="" class="nav"></div>
	
	</nav>
</div>
<script>

$('.handle').on('click', function(){
	$('nav ul').toggleClass('showing');
})
</script>
       

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
       <div class="picture">
      <img src="img/story2.jpg" alt="" class="image"/>
 </div>
 
 	<div id="contact">
    <h1>CONTACT US</h1>
    <p>If you have any questions or if you want to get in contact with Paul Innes or any of the staff and volunteers or if you want to visit The Solid Rock Cafe but do not know where put your details in below.</p><br/>

<?php

  //Create an IF Statement that uses the POST REQUEST_METHOD to retrieve information from the table
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(!empty($_POST['name'])&&!empty($_POST['address'])&&($_POST['phone'])&&($_POST['email']) &&!empty($_POST['message'])){


  
		 
  
		
  //Add a second IF statement that will check if all three form elements are empty (!empty). Remember the and operator - &&


$body = "Name: {$_POST['name']}\n\nComments: {$_POST['comments']}";
		$body = wordwrap($body, 70);
		$to = 'dolly.solidrock@gmail.com';
		mail($to, 'PHP Email', $body, "From: {$_POST['email']}");
		//Echo a Message which will confirm submission
		 echo "thank you for your submission.";

		$_POST = array();
			
		
	}
	
	   else {
	  echo "Please fill out the form correctly.";
   }}
?>


 
<form name="form">
	<fieldset>
    <table>																																			
	<form action="php/contact.php" method="post">
    <tr><td>name*</td><td><input type="text" size="15" name="firstname" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" /></td>/></td></tr>
   
    <tr><td>address*</td><td><input type="text" size="15" name="surname" value="<?php if (isset($_POST['name'])) echo $_POST['address']; ?>" /></td>/></td></tr>
 
	<tr><td>phone*</td><td><input type="text" size="20" name="email" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" /></td>/></td></tr>
   
    <tr><td>email*</td><td><input type="text" size="15" name="number" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></td>/></td></tr>
    
    <tr><td>message</td><td><textarea placeholder>Message</textarea></td></tr>
    
        <tr><td><input type="submit" value="submit" onclick="validate()"/></td><td><input type="reset" value="reset"/>      
</td></tr>

    </table>
    </fieldset>
    </form>

   <br/>	
   
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2132.373536933333!2d-2.0074946839932606!3d57.69312338111652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48848115aadd6c9d%3A0x7f97f13f4e30ee96!2sSolid+Rock+Cafe!5e0!3m2!1sen!2suk!4v1457950433003" class="map"  style="border:0" allowfullscreen></iframe>	
   </div>
   			
<div class="footer"><br/>
   <p>&copy; Solid Rock Cafe 2016<br/>
  	24 Broad St, Fraserburgh AB43 9AE<br/>
	01346 515608<br/>
    dolly.solidrock@gmail.com
    
  </p>
  <br/>
  	 <a href="https://www.facebook.com/Solid-Rock-Cafe-196297310432598/?fref=ts"><img src="img/facebook-2-256.fw.png" alt="" height="40" width="40" class="facebook"/></a>




</div>
</div>
</body>
</html>
