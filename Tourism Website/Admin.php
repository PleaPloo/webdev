<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="webstyle.css"></link>

    <!-- Custom Fonts (Google Fonts)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

    <title>Discover Brunei</title>
  </head>

  <body>

    <header>
      <?php include 'nav.php'; ?>
    </header>

    <main>

      <?php include('db_connect.php'); ?>

      <?php
      $sql = "SELECT * FROM comments";
      $result = mysqli_query($conn, $sql);
      ?>

      <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Comment</th>
          <th>Actions</th>
        </tr>

        <?php
          $sql = "SELECT * FROM comments";
          $result = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . htmlspecialchars($row['uname']) . "</td>";
              echo "<td>" . htmlspecialchars($row['email']) . "</td>";
              echo "<td>" . htmlspecialchars($row['comment']) . "</td>";
              echo "<td>
              
              <a href='edit.php?id=" . $row['id'] . "'>Edit</a>
              <a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Delete this record?\")'>Delete</a>
              </td>";
            echo "</tr>";
          }
        ?>

      </table>

    </main>

  </body>

  <div class="footer">
    <p>©2025 Discover Brunei</p>
  </div>

</html>
