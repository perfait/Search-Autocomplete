<?php 

require"db.php";?>

<?php
$searchTerm=$_GET['term'];

$query=mysqli_query($conn, "select * from registration where email LIKE '%".$searchTerm."%' ORDER BY email ASC");


while($row=mysqli_fetch_array($query)){
    $data[]=$row['email'];
}

echo json_encode($data);

?>