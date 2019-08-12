<?php
   
   if(isset($_GET['input-submit'])){
        $name = secure_input($_GET['name']);
        $surname = secure_input($_GET['surname']);
        $email = secure_input($_GET['email']);
        $comment = secure_input($_GET['comment']);

        mail("kareljordaan@yahoo.com",$name . "sent you a message from your website",$comment);
        
   }  

    function secure_input($input){
      $input = trim($input);
      $input = stripcslashes($input);
      $input = htmlspecialchars($input);
      return $input;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">
 
    <title>Services</title>
    <!-- W3schools icon library insert-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- GOOGLE FONTS INSERT -->
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">

    <!-- MY OWN STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="contact.css">

  </head>
<body id="body">
	<h1>Contact Us</h1>
	<div id="menu">
		<p id="menu-para">Menu</p>
	</div>
<div id="overlay">
 <nav id="navbar">
 	<ul>
 		<li><a  href="landingPageMenu.html">Home</a></li>
 		<li><a  href="about.html">About</a></li>
 		<li><a  href="services.html">Services</a></li>
 	</ul>
 </nav>
</div>

<main>
     
	<div id="content">
		<div id="div-1">

        <?php
            if(isset($_GET['input-submit'])){
                echo "<h2 id='h2'>Thanks $name,  your message was sent.</h2>";
            }  
        ?>    

        <h2>Send us a message</h2>
			<form>
				Name: <input type="text" name="name" placeholder="Enter name" required=""><br>
				Surname: <input type="text" name="surname" placeholder="Enter lastname" required=""><br>
				Email: <input type="email" name="email" placeholder="Enter email" required=""><br>
				<textarea name="comment" rows="10" cols="80" placeholder="Please enter your comment or query" required=""></textarea><br>
				<input id="submit" type="submit" name="input-submit">
            </form>
          
		</div>
		<div id="div-2">
			
		</div>
	</div>
</main>
<footer>
	
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-instagram"></a>
	<a href="#" class="fa fa-linkedin"></a>
</footer>

<!-- My own javascript file -->
   <script type="text/javascript" src="main.js"></script>
  </body>
</html>
