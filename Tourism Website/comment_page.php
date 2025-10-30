<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "tourismdb";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$uname = $_POST['uname'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$sql = "INSERT INTO comments (uname, email, comment) VALUES ('$uname', '$email', '$comment')";

if (mysqli_query($conn, $sql)) {
    header("Location: Contact.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
