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

    <style>

      h2{
        font-size: 2rem;
        padding-left: 2rem;
        text-shadow: 0px 3px 10px #000000ff;
        color: white;
      }

      h3{
        font-size: 1.3rem; 
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        padding-left: 2rem;
        padding-bottom: 1rem;
        text-shadow: 0px 3px 10px #000000ff;
        color: white;
      }

      .text-underline h2{
        text-decoration: underline;
        color: #ffffffff;
      }

      .social {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
        padding-left: 2rem;
      }

      .social h3 {
        margin: left;
        padding: 0;
        font-size: 1.3rem;
      }

      .social img {
        width: 30px;
        height: auto;
      }

    </style>

  </head>

  <body>

    <header>
      <?php include 'nav.php'; ?>
    </header>
    
    <div class="centered prevent-select" style="font-size: clamp(1rem, 2vw, 3rem);">
      <h1>Share Your Experience</h1>
    </div>

    <main>
      
      <form action="comment_page.php" method="POST" onsubmit="return validateForm()">
        
        <label for="uname">Name:</label><br>
        <input type="text" id="uname" name="uname" placeholder=""><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value=""><br>

        <label for="comment">Comment:</label><br>
        <textarea type="text" id="comment" name="comment" value=""></textarea><br><br>

        <input type="submit" value="Submit">

      </form>

      <script>
        function validateForm() {
          const email = document.getElementById("email").value.trim();
          const name = document.getElementById("uname").value.trim();
          const comment = document.getElementById("comment").value.trim();

          // Email validation
          const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

          if (name === "") {
            alert("Please enter your name.");
            return false;
          }

          if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return false;
          }

          if (comment === "") {
            alert("Please enter your comment.");
            return false;
          }

          return true;
        }
      </script>

      <section class="features-section">
      
      <h2>Contact us</h2>
      <h3>We’re here to help you explore Brunei with ease.<br>
      Whether you’re planning a visit, need a local tour guide, or want <br>
      travel information, feel free to reach us through the details below.</h3>

      <section class="text-underline">
      <h2>Phone</h2>
      <h3>+673 222 6111</h3>

      <h2>Email</h2>
      <h3>info@discoverbrunei.com</h3>

      <h2>Social</h2>
      
      <div class="social">
      <a href="https://www.facebook.com"><img src="assets/pics/facebook.png"></a>
      <a href="https://www.instagram.com"><img src="assets/pics/instagram.png"></a>
      <h3>@discoverbrunei</h3>
      </div>
      
      <h2>Address</h2>
      <h3>Jalan Sultan Omar ‘Ali Saifuddien, Bandar Seri Begawan, Brunei Darussalam</h3>
      </section>

    </main>

  </body>

  <div class="footer">
    <p>©2025 Discover Brunei</p>
  </div>
  
</html>
