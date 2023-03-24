<?php
$host = "localhost";
$username = "root";
$password = "password";
$database = "db_tattoo_fip";
$table = "team";

$conn = mysqli_connect("localhost", "root", "db_tattoo_fip");


//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// query data from table
$sql = "SELECT * FROM $table";
$result = mysqli_query($conn, $sql);

// create associative array to store data
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// close database connection
mysqli_close($conn);

// encode data into JSON format
$json = json_encode($data);

// save JSON to file
$file = 'data.json';
file_put_contents($file, $json);

echo "JSON file created successfully!";
?>


<!-- $dbconnection = new PDO("mysql::host=$hostname; databasename=$database",$username,$password );
$row=$dbconnection->prepare("select * $table");
$row->execute();
$data=array();
foreach($row as $resulte)
{
    $jsonformate['id']=$result['id'];
    $jsonformate['fname']=$result['fname'];
    $jsonformate['lname']=$result['lname'];
    $jsonformate['title']=$result['title'];
    $jsonformate['story']=$result['story'];
    $jsonformate['image']=$result['image'];
    array_push($data,$jsonformate);
}

echo json_encode($data); -->




