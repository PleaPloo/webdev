<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="webstyle.css">

    <!-- Custom Fonts (Google Fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

    <title>Discover Brunei</title>

    <style>
      body {
        font-family: "DM Serif Text", serif;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                    url('assets/pics/bg2.jpg') center/cover no-repeat fixed;
        color: white;
      }

      h1 {
        text-align: center;
        text-shadow: 0px 3px 10px #000000;
        font-size: clamp(1.8rem, 3vw, 2.5rem);
        margin-bottom: 2rem;
      }

      table {
        width: 90%;
        margin: 0 auto;
        border-collapse: collapse;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.8);
      }

      th, td {
        padding: 1rem;
        text-align: left;
      }

      th {
        background-image: linear-gradient(180deg, #283612ff, #4d5c32ff);
        color: white;
        font-size: 1.2rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
      }

      tr:nth-child(even) {
        background: rgba(255, 255, 255, 0.05);
      }

      tr:hover {
        background: rgba(24, 211, 105, 0.3);
      }

      td {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1rem;
        color: #f0f0f0;
      }

      a {
        text-decoration: none;
        color: #00c3ff;
        margin-right: 0.8rem;
        transition: color 0.3s ease;
      }

      a:hover {
        color: #58ffffff;
        text-decoration: underline;
      }
    </style>

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

      <br>
      <table>
        <tr>
          <th>ID</th>
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
