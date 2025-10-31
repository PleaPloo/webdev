<?php
include('db_connect.php');

if (!isset($_GET['id'])) {
    die("Invalid URL");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM comments WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    die("Record not found");
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="webstyle.css">

    <!-- Custom Fonts (Google Fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

    <title>Edit Comment - Discover Brunei</title>
</head>

<body>
    <h1 class="centered">Edit Comment</h1>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Name:</label><br>
        <input type="text" name="uname" value="<?= htmlspecialchars($row['uname']) ?>"><br>

        <label>Email:</label><br>
        <input type="text" name="email" value="<?= htmlspecialchars($row['email']) ?>"><br>

        <label>Comment:</label><br>
        <textarea name="comment"><?= htmlspecialchars($row['comment']) ?></textarea><br><br>

        <input type="submit" value="Update">
    </form>

    <a href="Admin.php" class="centered" style="font-size: 2rem; margin: auto; padding: 2rem; text-decoration: none;">Back to Admin Panel</a>
</body>

</html>
