<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="form.css">
  <style>
    input[type='password'] {
      padding: 1.8vh 2vw 1.8vh 1vw;
      width: 40vw;
      border: rgb(56, 183, 192) solid 2px;
      border-radius: 5px;
    }
  </style>
</head>

<body>

  <?php
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Required";
    }
  }

  ?>

  <!-- top branding bar -->
  <div class="Branding">
    <h1>
      <img src="assets/logo.png" height=40px>
      &nbsp Quick Release
    </h1>
  </div>

  <div class="something">
    <h1>Login</h1>
    <form action="login.php" method="post">
      <h4>Enter usename: </h4>
      <input type="text" placeholder="Username" name="name" value="<?php if (isset($_COOKIE["username"])) {
                                                                      echo $_COOKIE["username"];
                                                                    } ?>" required>
      <span class="error"> <?php echo $nameErr; ?></span>
      <br>

      
      <h4>Enter password: </h4>
      <input type="password" placeholder="Password" name="name" value="<?php if (isset($_COOKIE["password"])) {
                                                                          echo $_COOKIE["password"];
                                                                        } ?>" required>
      <span class="error"><?php echo $nameErr; ?></span>
      <br>
      <br>
      <br>
      <input type="submit" class="button">
    </form>
  </div>
</body>

</html>