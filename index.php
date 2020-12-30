<!DOCTYPE html>
<html>
  <head>
    <title>Avery S. Wiehe</title>
    <link rel="icon" type="image/png" href="imgs/briefcase_favicon.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="custom_styling.css" />

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="custom_script.js"></script>

    <!-- Newest jQuery (mainly for AJAX calls) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- FontAwesome Icon Library -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
    <div class="inner-container">
      <section id='nav_section'></section>
      <main style="padding: 15px; min-height:550px;">
        <article id='portrait_and_profile'>
          <img id='portrait' src='imgs/portrait.jpg' />
          <div id='profile_about' class='bg-light'>
            <h1>
              Avery S. Wiehe
            </h1>
            <div id='profile_paragraphs'>
              <p id='welcome_text_one'><!-- To be populated by welcome_part_one.txt --></p>
              <p style='font-style:oblique; font-weight:bold; font-size:1.5em;'>OR...</p>
              <p id='welcome_text_two'><!-- To be populated by welcome_part_one.txt --></p>
              <button id="go_to_overview" class="btn btn-primary" style="font-size:3em; padding:20px; position:relative; bottom:0px;"><i class="fas fa-map-signs"></i>&nbsp;&nbsp;Go To Site Overview</button>
            </div>
          </div>
        </article>
      </main>
    </div>
  </body>
</html>