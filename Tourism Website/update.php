<?php
include('db_connect.php');

//Check if POST data is set
if (!isset($_POST['id'], $_POST['uname'], $_POST['email'], $_POST['comment'])) {
    die("Incomplete form data");
}



$id = intval($_POST['id']);

$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);

//Update the comment in the database
$sql = "UPDATE comments SET uname='$uname', email='$email', comment='$comment' WHERE id=$id";



if (mysqli_query($conn, $sql)) {
    //Redirect back to admin panel after update
    header("Location: Admin.php");
    exit();
} else {
    echo "Error updating record: " . mysqli_error($conn);
}



mysqli_close($conn);
?>
