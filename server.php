<?php
	$heat="heat";
	$temperature="temperature";
	
	include("config.php");

	$sql="SELECT heat, temperature FROM htemp ORDER BY ID";

	if ($result=mysqli_query($conn, $sql))
  	{
  	// Fetch one and one row
  		while ($row=mysqli_fetch_array($result))
    	{	
    		$heat=$row['heat'];
    		$temperature=$row['temperature'];
    	}
  	// Free result set
  	mysqli_free_result($result);
	}

	mysqli_close($conn);
	
	$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
</html>