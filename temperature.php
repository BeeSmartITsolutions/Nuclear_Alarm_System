<?php
$con= mysqli_connect("localhost","root","","nuclear");
if(mysqli_connect_errno($con))
{
	echo"Failed to connect to MySql".mysqli_connect_error();
}
else
{
	
	?>
	<html>
	<style>
	body {
    background: url(temp.jpg) ;
	background-repeat: no-repeat center center fixed; ;
        -webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		}
	</style>

	
	
	<?php
	header( "refresh:10;url=temperature.php" );
    mysqli_query($con, "UPDATE sensor SET stemp=ROUND(RAND() * 40) + 30");
	
	
	
	echo "<font color='#F87431'>.<h1>FOR DEPARTMENT A:</h1>.</font>"."<br>";
	$counta=0;
	$res=mysqli_query($con,"Select * from sensor where sid='s1'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s2'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s3'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s4'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s5'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s6'");
	while($row = mysqli_fetch_array($res))
	{
		echo "<br>".$row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s7'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s8'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s9'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s10'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counta++;
		}
		if($counta>=5)
			{
				echo "5 sensors show greater temperature";
				echo "<br>";
				?>
				<html>
				<audio controls autoplay>
				<source src="media.ogg" type="audio/ogg">
				<source src="media.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
				</audio>
				</html>
				<?php
				
				
				
				$queryy = mysqli_query($con,"SELECT eemail FROM employee WHERE edept='a'");
				while ($rowy = mysql_fetch_array($queryy)) 
				{

					$to      = $rowy['eemail'];
					$subject = 'Evacuate Department!';
					$message = 'Evacuate The Department Fast';
					$headers = 'From: teamavengers' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

					mail($to, $subject, $message, $headers);
				}

			}
		else break;
		echo "<br>";
	}


	echo "<font color='#F87431'>.<h1>FOR DEPARTMENT B:</h1>.</font>"."<br>";
	$countb=0;
	$res=mysqli_query($con,"Select * from sensor where sid='s11'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s12'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s13'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s14'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s15'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s16'");
	while($row = mysqli_fetch_array($res))
	{
		echo "<br>".$row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s17'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s18'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s19'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s20'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countb++;
		}
		if($countb>=5)
			{
				echo "5 or more sensors show greater temperature";
				echo "<br>";
				?>
				<html>
				<audio controls autoplay>
				<source src="media.ogg" type="audio/ogg">
				<source src="media.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
				</audio>
				</html>
				<?php
				var_dump(mail('9817305338@vtext.com','Warning','Please leave your place Immediately'));

			}
			else break;
		echo "<br>";
			} 
	
	
	echo "<font color='#F87431'>.<h1>FOR DEPARTMENT C:</h1>.</font>"."<br>";
	$countc=0;
	$res=mysqli_query($con,"Select * from sensor where sid='s21'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s22'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s23'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s24'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s25'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s26'");
	while($row = mysqli_fetch_array($res))
	{
		echo "<br>".$row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s27'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s28'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s29'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s30'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countc++;
		}
		if($countc>=5)
			{
				echo "5 or more sensors show greater temperature";
				echo "<br>";
				?>
				<html>
				<audio controls autoplay>
				<source src="media.ogg" type="audio/ogg">
				<source src="media.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
				</audio>
				</html>
				<?php
				var_dump(mail('9817305338@vtext.com','Warning','Please leave your place Immediately'));

			}
			else break;
		echo "<br>";
	} 
	
	
	echo "<font color='#F87431'>.<h1>FOR DEPARTMENT D:</h1>.</font>"."<br>";
	$countd=0;
	$res=mysqli_query($con,"Select * from sensor where sid='s31'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s32'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s33'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s34'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s35'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s36'");
	while($row = mysqli_fetch_array($res))
	{
		echo "<br>".$row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s37'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s38'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s39'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s40'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$countd++;
		}
		if($countd>=5)
			{
				echo "5 or more sensors show greater temperature";
				echo "<br>";
				?>
				<html>
				<audio controls autoplay>
				<source src="media.ogg" type="audio/ogg">
				<source src="media.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
				</audio>
				</html>
				<?php
				var_dump(mail('9817305338@vtext.com','Warning','Please leave your place Immediately'));

			}
			else break;
		echo "<br>";
	} 
	
	
	echo "<font color='#F87431'>.<h1>FOR DEPARTMENT E:</h1>.</font>"."<br>";
	$counte=0;
	$res=mysqli_query($con,"Select * from sensor where sid='s41'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s42'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s43'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s44'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s45'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']. "Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
	}

	$res=mysqli_query($con,"Select * from sensor where sid='s46'");
	while($row = mysqli_fetch_array($res))
	{
		echo "<br>".$row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s47'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s48'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s49'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
	} 
	
	$res=mysqli_query($con,"Select * from sensor where sid='s50'");
	while($row = mysqli_fetch_array($res))
	{
		echo $row['stemp']."Centigrate";
		if($row['stemp']< 45)
		{
			?>
			<html>
			<body>
			<img id="myImage" src="green.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else if($row['stemp']>45 && $row['stemp']<55)
		{	
			?>
			<html>
			<body>
			<img id="myImage" src="blue.png" width="50" height="50">
			</body>
			</html>
			<?php
		}
			else
		{
			?>
			<html>
			<body>
			<img id="myImage" src="red.png" width="50" height="50">
			</body>
			</html>
			<?php
			$counte++;
		}
		if($counte>=5)
			{
				echo "5 or more sensors show greater temperature";
				echo "<br>";
				?>
				<html>
				<audio controls autoplay>
				<source src="media.ogg" type="audio/ogg">
				<source src="media.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
				</audio>
				</html>
				<?php
				var_dump(mail('9817305338@vtext.com','Warning','Please leave your place Immediately'));

			}
			else break;
		echo "<br>";
	} 
}
?>