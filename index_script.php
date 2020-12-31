<?php

$conn =new  mysqli("localhost","root","","knowledge_lens");
$results = mysqli_query($conn,"SELECT * FROM iot_data order by time desc limit 1");
#$data = array();

$data = mysqli_fetch_assoc($results);
	#$data[] = $row;
	/*echo "<div class='myDiv'><p>{<br>";
				echo " &emsp;\"Location\" : '" . $data["location"] . "',<br>";
				echo " &emsp;\"Temperature\" : " .  ",<br>";
				echo " &emsp;\"Humidity\" :" . $data["humidity"] . ",<br>";
				echo " &emsp;\"Pressure\" : " . $data["pressure"] . ",<br>";
				echo " &emsp;\"Time\" : " . $data["time"] . ",<br>";
			echo "}</p></div>";
		*/	
			
	echo "<div class=\"rotate\">";
		echo "<h1 id=\"temp\">". $data["temperature"] . "<br>Temp.</h1></div>";
	echo "<div class=\"rotate\">";
		echo "<h1 id=\"hum\">". $data["humidity"] . "<br>Humi.</h1></div>";
	echo "<div class=\"rotate\">";
		echo "<h1 id=\"pres\">". $data["pressure"] . "<br>Pres.</h1></div>";
	echo "<div class=\"rotate\">";
		echo "<h1 id=\"loc\">". $data["location"] . "<br>Station</h1></div>";
	
	
	
	
	/*<div class="rotate">
		<h1 id="humi"></h1>
	</div>
	
	<div class="rotate">
		<h1 id="pres"></h1>
	</div>
	
	<div class="rotate">
		<h1 id="loc"></h1>
	</div>
	
}*/
?>
