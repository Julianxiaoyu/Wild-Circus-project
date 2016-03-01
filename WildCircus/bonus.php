<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Wild Circus Tour</title>
    </head>

    <body>
        <div id="main_wrapper">
            
			<Header>      
				    <nav id="banner">
				        <h1><span class="welcome">Welcome to</span><br/>The Wild circus show</h1>
						
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="tour.html">Tour</a></li>
							<li><a href="mailto:wildcircus@wildcircus.com">Contact</a></li>
							<li><a href="bonus.php">Bonus</a></li>
						</ul>
						
					</nav>
            </Header>

			<section class="bonus">
				
				<h3>50% discount on your 2nd ticket</h3>

				<div class="contour tourbonusdisplay">
				
					<p>You can now try to win a discount for our next show.</br>Just answer below 2 questions and click on "Submit" button.<p/>


					<form class="questions" action="bonus.php" method="post" name="bonus">

					How old is "Daddy" our elephant? <input type="integer" size="1" maxlength="2" name="age" value=""><br/><br/>
					How many continents Harry has performed on? <input type="integer" size="1" maxlength="2" name="continent" value=""><br/><br/>
					<input type="submit" value="Check your answers">

					</form>
					</br>
	
					<?php
					$age=$_POST["age"];
					$continent=$_POST["continent"];

					if (isset($_POST["age"]) && isset($_POST["continent"]))
						{
							if (($age==53) && ($continent==5))	
							{
							echo "<p>Congratulation your answers are correct!</br>Please find below your code to get a 50% discount on your 2nd ticket:</br></br>XDHT1234</p>";
							}
							else
							{
							echo "<p>Your answers are not correct,</br>don't hesitate to check our performances presentation and try again !</p>"; 
							}		
						}

					?>
					
				</div>
				
			</section>
			
			<br/>
			<br/>
			
            <footer>
				<p>
				Copyright © 2016 Wild Circus <br/> All pictures courtesy of <a href="https://www.pixabay.com" target=blank >pixabay.com</a>, database of copyright free images and pictures
                </p><br/>
			</footer>
		</div>
	</body>
</html>