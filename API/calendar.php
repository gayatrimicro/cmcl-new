<?php
 // $conn= mysqli_connect("localhost","root","","crescent_db");
// include('/crescent/db.php');
// $conn= mysqli_connect("localhost","crescent_db","xy~Br761","crescent_db"); spacegm
$conn= mysqli_connect("70.32.97.149","crescent_db","crescent_db12345","crescent_db");

// header("Access-Control-Allow-Origin: https://cmclancaster.com/*");
// header("AMP-Access-Control-Allow-Source-Origin: https://cmclancaster.com/*");

$sql=mysqli_query($conn,"SELECT * FROM event_tbl ORDER BY time DESC ");
// $sql=mysqli_query($conn,"SELECT * FROM event_tbl where `time` > CURDATE() ORDER BY time DESC ");

$i=0;

while ($row = mysqli_fetch_assoc($sql)) {
	$res[$i]['title'] = $row['event_title'];
	$res[$i]['start'] = $row['event_date'];
	// $res[$i]['imageurl'] = '/assets/event/'.$row['images'];
	$res[$i]['url'] = '/news/feb/?event_id='.rtrim(base64_encode($row['event_id']), '==');
	$i++;
}

// $res = mysqli_fetch_assoc($sql);

$response = $res;
echo json_encode($response);




?>