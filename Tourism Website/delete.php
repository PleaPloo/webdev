<?php
include('db_connect.php');

//Check if id is passed
if (!isset($_GET['id'])) {
    die("Invalid URL");
}

$id = intval($_GET['id']); //Ensure id is an integer

//Delete record from database
$sql = "DELETE FROM comments WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    //Redirect back to admin page after deletion
    header("Location: Admin.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}






mysqli_close($conn);
?>
