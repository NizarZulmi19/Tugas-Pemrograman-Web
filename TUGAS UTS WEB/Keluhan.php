<!DOCTYPE html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<title>Keluhan</title>
</head>
<body>
	<div class="header" id="home">  	   
	        <div class="header_top">
	        	<div class="wrap">	      	   
		 	     <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
					</div>	
						<div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li class="current"><a href="#home">Home</a></li>
						    	<li><a href="pencegahan">Cara Pencegahan</a></li>
						    	<li><a href="Gejala">Gejala</a></li>
						    															
								<li><a href="#contact">Contact</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
						</div>							
	    		 <div class="clear"></div>
	          </div>
	       </div>
	          <div class="header_desc">
	          	<div class="wrap">	   
	          	   <p>Tetap jaga kesehatan anda <br />Jangan Lupa untuk mencuci tangan</p>	
	          	   
	         </div>
	   </div>
	<form action="inputdata.php" method="post">
	<div>
<div class="feedback" id="contact">
	 		 	   <div class="wrap">
	 		 	    <h2>Kirim Keluhan anda </h2>
	 		 	      <div class="line blue"><span> </span></div>
	 		            <h4>Jl Ketapang Suko Gang Kelud Rt 09 Rw 03</h4>
	 		 	                    <form>
	 		 	                    <div class="text-box">
	 		 	                    	<label>
									 <input type="text" class="textbox" name="TELPON" value="TELPON :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'TELPON:';}">
									</label>
	 		 	                     <label>
									 <input type="text" class="textbox" name="NAMA" value="Your Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name:';}">
									</label>
									<label>
									 <input type="text" class="textbox" name="EMAIL" value="Your Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email:';}">
									</label>
									<div class="clear"></div>
									</div>
									<textarea name ="PESAN"value="Your Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message:';}">Message</textarea>
									<input type="submit" value="Send Message">									
									</form>
								 
					           </div>
	 		           </div>
<?php
date_default_timezone_set('Asia/jakarta');
echo date("m-F-y, g:i:s a"); ?>
</body>
</html>