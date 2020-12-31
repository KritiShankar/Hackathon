

<?php

$conn =new  mysqli("localhost","root","","knowledge_lens");
$results = mysqli_query($conn,"SELECT * FROM iot_data order by time desc limit 30");
$data = array();
while($row = mysqli_fetch_assoc($results)){
	$data[] = $row;
}

echo json_encode($data);

?>
