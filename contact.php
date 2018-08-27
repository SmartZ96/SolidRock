<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="The Solid Rock Cafe is a facility to break people free from their addictions and place their trust in God.  fraserburgh, recovery, United Kingdom, drugs, alcohol, suppport" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
	</script>

<title>Conatct Us</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<link rel="shortcut icon" href="snake-text.ico"/>

</head>

<body>
<div id="wrapper">
	<div id="header">
<a href="index.html"><img src="img/logo.png" alt="" height="100" width="100" class="logo" title="back to the home page"/></a>
<nav>

	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="stories.html">Stories/Events</a></li>
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
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br>
    Your Address:<br>
    <input name="address" type="text" value="" size="30"/><br>
    Phone Number:<br>
    <input name="phone" type="integer" value="" size="30"/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Your message:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Send"/> 
    <input type="reset" value="Reset"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($address=="")||($phone=="")||($email=="")) 
        { 
		
        echo "All fields are required, please fill out <a href=\"\">the form</a> correctly."; 
        }
		 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail('dolly.solidrock@gmail.com', $subject, $message, $from); 
        echo "Thank you for your submission we'll get back to you as soon as possible."; 
        } 
    }   
?> 

</div>
   
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
