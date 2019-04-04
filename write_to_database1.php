<?php

include_once("config.php");

$UID= $_GET ['UID'];
$data = $_GET ['garbage1'];
$data1 = $_GET ['garbage2'];
$data2 = $_GET ['garbage3'];
$sql = "UPDATE garbage SET garbage1 = '$data', garbage2 = '$data1', garbage3 = $data2 WHERE UID = '$UID'";
$conn->query($sql);
if ($conn->query($sql) === TRUE) {
   // echo " Data entered correctly.";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM garbage";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "output : " . $row["output"];
      echo $row["garbage1"];
      echo $row["garbage2"];
      echo $row["garbage3"];
     //echo $row["outgoing"];
        //echo $result;
    }
} else {
echo "Error: " . $sql . "  " . $conn->error;
    echo "No results";
}

$conn->close();

?>
