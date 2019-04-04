<?php

include_once("config.php");

$UID= $_GET ['UID'];
$data = $_GET ['heat'];
$data1 = $_GET ['temperature'];
$sql = "UPDATE htemp SET heat = '$data', temperature = '$data1' WHERE UID = '$UID'";
$conn->query($sql);
if ($conn->query($sql) === TRUE) {
   // echo " Data entered correctly.";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM htemp";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "output : " . $row["output"];
      echo $row["heat"];
      echo $row["temperature"];
     //echo $row["outgoing"];
        //echo $result;
    }
} else {
echo "Error: " . $sql . "  " . $conn->error;
    echo "No results";
}

$conn->close();

?>
