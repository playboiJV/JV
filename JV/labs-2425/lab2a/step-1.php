<?php

require "helpers/helper-functions.php";

session_start();

$contact_number = $_POST['contact_number'];
?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>
<body>

<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
      <h1>
      Registration (Step 1/3)
      </h1>
      </div>
      <div class="p-section--shallow">



        <form action="step-2.php" method="POST">

        <fieldset>
          <label>Complete Name</label>
          <input type="text" name="fullname" placeholder="John Doe">

          <label>Birthdate</label>
          <input type="date" name="birthdate">

          <label>Contact Number</label>
          <input type="text" name="contact_number" placeholder="+639123456789" />

          <label>Sex</label>
            <br />
            <input type="radio" name="sex" value="male" checked="checked">Male
            <br />
            <input type="radio" name="sex" value="female">Female
            <br />

           <br>
           <br>
           <button type="submit">Next</button>
            <a href="index.php" class="p-button--neutral" style="text-decoration: none; padding: 0.5rem 1rem; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; color: #333;">Back</a>
          </fieldset>

        </form>



      </div>
    </div>

    <div class="col">
      <div class="p-image-container--3-2 is-cover">
        <img class="p-image-container__image" src="https://www.auf.edu.ph/home/images/ittc.jpg" alt="">
      </div>
    </div>

  </div>
</section>

</body>
</html>
