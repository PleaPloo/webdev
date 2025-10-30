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
  <title>Edit Comment</title>
</head>

    <body>

        <h1>Edit Comment</h1>

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

        <a href="admin_panel.php">Back to Admin Panel</a>

    </body>

</html>
