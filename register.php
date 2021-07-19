<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Yourself</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>

    <?php
    $nameErr = "";
    $emailErr = "";
    $mobilenoErr = "";
    $genderErr = "";
    $websiteErr = "";
    $pErr = "";
    $p = "";
    
    $name = "";
    $email = "";
    $mobileno = "";
    $gender = "";
    $website = "";



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = input_data($_POST["name"]);
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only alphabets and white space are allowed";
            }
        }

        //Email input  
        if (empty($_POST["email"])) {
            $emailErr = "<brEmail is required";
        } else {
            $email = input_data($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "<br>Invalid email Id";
            }
        }

        if (empty($_POST["p"])) {
            $pErr = "<br>Password is required";
        } else {
            $p = input_data($_POST["p"]);
            if (strlen($p) < 6) {
                $pErr = "<br>Password must contain atleast 6 alpha-numeric charecters.";
            }
        }

        //Number Validation  
        if (empty($_POST["mobileno"])) {
            $mobilenoErr = "Mobile no is required";
        } else {
            $mobileno = input_data($_POST["mobileno"]);
            // check if mobile no. is well-formed  
            if (!preg_match("/^[0-9]*$/", $mobileno)) {
                $mobilenoErr = "Only numeric value is allowed.";
            }
            //check mobile no. length  
            if (strlen($mobileno) != 10) {
                $mobilenoErr = "invalid mobile no.";
            }
        }


        //Empty Field Validation  
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = input_data($_POST["gender"]);
        }

    }
    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>



    <!-- branding bar -->
    <a href="index.php">
        <div class="Branding">
            <h1>
                <img src="assets/logo.png" id="brand_image"></img>
                Quick Release
            </h1>
        </div>
    </a>

    <h1>Registration Form</h1>
    <span class="error">* required fields </span>
    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-bg">
        Name:
        <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?> </span>
        <br><br>
        E-mail:
        <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?> </span>
        <br><br>
        Mobile No:
        <input type="text" name="mobileno">
        <span class="error">* <?php echo $mobilenoErr; ?> </span>
        <br><br>

        Password:
        <input type="text" name="p">
        <span class="error">* <?php echo $pErr; ?> </span>
        <br><br>


        Gender:
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other
        <span class="error">* <?php echo $genderErr; ?> </span>
        <br><br>
        <input type="submit" name="submit" value="Submit" class="button">
        <br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if ($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "" && $websiteErr == "" && $pErr == "") {
            echo "<h3> <font color=white>You have sucessfully registered.</font> </h3>";
            echo "Name: " . $name;
            echo "<br>";
            echo "Email: " . $email;
            echo "<br>";
            echo "Mobile No: " . $mobileno;
            echo "<br>";
            echo "Password: **";
            echo "<br>";
            echo "Gender: " . $gender;
        } else {
            echo "<h3> <font color=red>You didn't filled up the form correctly.</font> </h3>";
        }
    }
    ?>

</body>
</html>