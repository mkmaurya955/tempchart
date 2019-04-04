<?php
	$garbage1="garbage1";
	$garbage2="garbage2";
  $garbage3="garbage3";
	
	include("config.php");

	$sql="SELECT garbage1, garbage2, garbage3 FROM garbage ORDER BY ID";

	if ($result=mysqli_query($conn, $sql))
  	{
  	// Fetch one and one row
  		while ($row=mysqli_fetch_array($result))
    	{	
    		$garbage1=$row['garbage1'];
    		$garbage2=$row['garbage2'];
        $garbage3=$row['garbage3'];
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