<?php

$conn =new  mysqli("localhost","root","","knowledge_lens");
$results = mysqli_query($conn,"SELECT * FROM iot_data order by time desc limit 30");
#$data = array();

while($data = mysqli_fetch_assoc($results)){
$time = (int)$data["time"];
	echo "<tr>";
				echo "<td>".$data["location"] . "</td>";
				
				echo "<td>".date("Y-m-d H:i:s",$time)."</td></tr>";
}
?>






