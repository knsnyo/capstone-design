<?php
session_start();
include("../../db.php");

if(isset($_GET['items'])){
    //옆 리스트 클릭시
    $items = $_GET['items'];
	$concat="SELECT CONCAT (`COL 12`,`COL 13`) 'names' 
    FROM house 
    ORDER BY FIELD(`COL 5`, '$items')desc, houseId desc";

}
else{
    $concat="SELECT CONCAT (`COL 12`,`COL 13`) 'names' FROM house";
}

$c_order= mysqli_query($db,$concat);
$sql = "SELECT * FROM location";
$order = mysqli_query($db, $sql);
$locate= array();

while($row= mysqli_fetch_array($order)) {
	$c_order= mysqli_query($db,$concat);
	while($c_row= mysqli_fetch_array($c_order)){
		if($c_row['names']==$row['name']){
      array_push($locate, [
				'x' => $row['location_x'], 
        'y' => $row['location_y']
				]
			);
		}
	}
}

echo json_encode($locate), "\n";
?>