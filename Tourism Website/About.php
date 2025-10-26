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

      .m-section {
        width: 100%;
        display: flex;
        justify-content: center;
      }

      .m-container {
        display: flex;
        align-items: center;
        gap: 20px;
      }
      
      .m-image {
        width: 30%;
        max-height: fit-content;
        overflow: hidden;
        padding-left: 15rem;
      }

      .m-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }

      .m-text{
        margin-left: 3rem;
        background-image: linear-gradient(180deg, #515e3a, #6b785304);
        color: white;
        padding-left: 3rem;
        padding-right: 3rem;
        border-radius: 5%;

        text-shadow: 0px 3px 10px #000000ff;
        font-size: 1.5rem;
        text-align: justify;
        text-justify: inter-word;
        max-width: 25em;
      }

    </style>
  </head>

  <body>

    <header>
      <?php include 'nav.php'; ?>
    </header>

    <main>
    
      <section class="features-section">
      
      <h1>About Discover Brunei</h1>

      <div class="m-container">
      
        <div class="m-image">
          <img src="assets/pics/placeholder.jpg" alt="Place 1">
        </div>

        <div class="m-text"><p>Welcome to Discover Brunei,  your  travel companion to the “Abode of Peace.”

        This website helps visitors explore Brunei Darussalam
         by providing a complete travel guide
        to the country’s top attractions, hidden gems, and cultural experiences, all in one place. <br><br>

        From royal landmarks to pristine rainforests, Brunei offers peace, beauty,
        and adventure and we’re here to guide you along the way.<br><br>

        Our goal is to make traveling easier for tourists by offering updated information,
        useful travel tips, and guidance throughout your journey.
        Explore each section to learn more about Brunei’s attractions,
        culture, and local food or contact us to share your own travel story!
        </p>

        </div>

      </div>

      </section>

    </main>

      <div class="footer">
        <p>©2025 Discover Brunei</p>
      </div>

  </body>

</html>
