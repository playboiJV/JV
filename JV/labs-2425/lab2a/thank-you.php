<?php

require "helpers/helper-functions.php";

session_start();



$agree = $_POST['agree'];
$password = $_POST['password'];
$_SESSION['fullname'] = $fullname;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

$_SESSION['contact_number'] = $contact_number;
$_SESSION['program'] = $program;
$_SESSION['agree'] = $agree;

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$_SESSION['password'] = $hashed_password;

$form_data = $_SESSION;

dump_session();

session_destroy();
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
          Thank You Page
        </h1>
      </div>
      <div class="p-section--shallow">
      
        <table aria-label="Session Data">
            <thead>
                <tr>
                    <th></th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($form_data as $key => $val):
            ?>
                <tr>
                    <th><?php echo htmlspecialchars($key); ?></th>
                    <td>
                      <?php echo htmlspecialchars($val); ?>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
      

      </div>
    </div>
  </div>
</section>

</body>
</html>
