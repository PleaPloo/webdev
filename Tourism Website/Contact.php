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
    
    <div class="centered prevent-select" style="font-size: clamp(1rem, 2vw, 3rem);">
      <h1>Share Your Experience</h1>
    </div>

    <main>
      
      <form action="comment_page.php" method="POST">
        
        <label for="uname">Name:</label><br>
        <input type="text" id="uname" name="uname" value=""><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br>

        <label for="comment">Comment:</label><br>
        <input type="text" id="comment" name="comment" value=""><br><br>

         <input type="submit" value="Submit">

      </form>

    </main>

  </body>

  <div class="footer">
    <p>©2025 Discover Brunei</p>
  </div>
  
</html>
