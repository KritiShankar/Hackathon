<?php

$conn =new  mysqli("localhost","root","","knowledge_lens");
$results = mysqli_query($conn,"SELECT * FROM iot_data order by time desc limit 30");
#$data = array();

while($data = mysqli_fetch_assoc($results)){
	#$data[] = $row;
	echo "<div class='myDiv'><p>{<br>";
				echo " &emsp;\"Location\" : '" . $data["location"] . "',<br>";
				echo " &emsp;\"Temperature\" : " . $data["temperature"] . ",<br>";
				echo " &emsp;\"Humidity\" :" . $data["humidity"] . ",<br>";
				echo " &emsp;\"Pressure\" : " . $data["pressure"] . ",<br>";
				echo " &emsp;\"Time\" : " . $data["time"] . ",<br>";
			echo "}</p></div>";
	
}
?>
