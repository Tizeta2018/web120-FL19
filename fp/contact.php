<!DOCTYPE html>
<html>
<head>
<title>Your Comment</title>

    
      <link href="css/styles.css" type="text/css" rel="stylesheet">
      <link href="css/slider.css" type="text/css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">       
      <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
      
      <link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet"> 

      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    
</head>


   <body>
    <div id="wrapper">
        <header>
           <div id="logo"><img src ="images/social.png" alt="logo" /></div> 
           <div id="name"><h1><em>Y</em>ene <em>T</em>ravel <em>A</em>gency</h1></div> 

        </header>
   <nav>
        <ul>
              <li> <a href="index.php">Home</a></li>
              

              <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About Us</a>
    <div class="dropdown-content">
      <a href="mission.php">Mission</a>
      <a href="company.php">Company</a>
     
    </div>
  </li>     
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Services</a>
    <div class="dropdown-content">
      <a href="touring.php">Touring</a>
      <a href="rentals.php">Rentals</a>
    </div>
  </li>

  <li> <a href="destination.php ">Destination</a></li>
              <li> <a href="contact.php">Contact Us</a></li>
       </ul>
        </nav>

                <div id="banner">
       
        </div>

      


<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Your Comment</h2>
 
 <!-- My header.php include ends here -->
    
    
 	<!-- START HTML FORM -->
	<form action="contact.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6Lc9tMYUAAAAAHp__JMy06VZrgfdc30Yj0nFx61g"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>

</section>
<!-- END LEFT COL -->

<!---end header---->

<!--START FOTTER INCLUDE HERE-->
   <!----start footer includes file--->
<!-- START Footer -->
<footer>
  <p><small>&copy; 2019- by <a href="#" target="_blank">Tizeta</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>
 
    
 