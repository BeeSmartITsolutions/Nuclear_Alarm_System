<?php
if($_POST['Username']=='admin' && $_POST['Password']== 'admin')
	{
		?>
		<html>
		<style>
		body 
		{
		background: url(Access-Granted1.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;}
		a{color:white;}
		a{align:center;}	
		a:hover {color:yellow;}
`			
		</style>
		<h2><a href="temperature.php">Click Here To Get Temperature Control Access </a><br>
		<br>
		<br>
		</html>
	<?php
	}
else
	{
	?>
	<html>
	<style>
	body {
    background: url(No-Access.jpg) no-repeat center center fixed; 
	-webkit-background-size: (cover-10);
	-moz-background-size: (cover-10);
	-o-background-size: (cover-10);
	background-size: (cover-10);
	}
</style>
<a href="http://www.free-iqtest.net" title="IQ Test"><img src="http://www.free-iqtest.net/images/badges2/l160.gif" width="200" height="100" alt="IQ Test" border="0"></a><br/><a title="IQ Test" href="http://www.free-iqtest.net">IQ Test</a>

<a href="http://www.iq-test.cc/" target="_blank"><img border=0 title="IQ Test" alt="IQ test" src="http://www.iq-test.cc/badges/show_badge.php?testid_url=5450348_e4a0" /></a>
</html>
<?php
		echo "<font color='red'><h1>InValid User!!</h1>";
	}
?>