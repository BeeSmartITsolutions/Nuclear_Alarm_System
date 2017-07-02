<?php
$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['dept'];
$d=$_POST['email'];
$e=$_POST['phone'];
$con= mysqli_connect("localhost","root","","nuclear");
if(mysqli_connect_error($con))
{
	echo"Failed to connect to MySql".mysqli_connect_error();
}
else
{
$qry="Insert into employee values('$a','$b','$c','$d','$e')";
mysqli_query($con,$qry);
echo"<h2>Data Entered Successfully</h2>";
}
?>

<html>
	<body>

	<h1>Department A</h1>

	<img id="myImage" onclick="changeImage()" src="red.png" width="100" height="100">
	<script>
	function changeImage() {
    var image = document.getElementById('myImage');
    if (image.src.match("red")) {
        image.src = "blue.png";
    } else {
        image.src = "red.png";
    }
}
</script>

</body>
</html>