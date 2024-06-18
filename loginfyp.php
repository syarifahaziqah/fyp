<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: bootstrap.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: bootstrap.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <br>
    <style>
        body {
            background-color: transparent;
            background-image: url(img/Front_School_BG_v2%5B1%5D.png);
            background-size: cover;
            width: 100%;
            height: 100%;
            padding: 100px;
            margin: auto;
            text-align: left;
            font-family: sans-serif;

        }

        .container {
            max-width: 640px;
            padding: 20px;
            border-radius: 10px;
        }

    </style>
</head>

<body>

    <div class="container">
        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="title">Welcome🍋
                <br><span>Sign in to continue</span>
            </div>
            <?php if(!empty($login_err)): ?>
            <div class="alert alert-danger"><?php echo $login_err; ?></div>
            <?php endif; ?>

            <input class="input" name="username" placeholder="Username" type="text" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" required>
            <span class="invalid-feedback"><?php echo $username_err; ?></span>

            <input class="input" name="password" placeholder="Password" type="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" required>
            <span class="invalid-feedback"><?php echo $password_err; ?></span>

            <div class="uv-checkbox-wrapper">
                <input type="checkbox" id="uv-checkbox" class="uv-checkbox" />
                <label for="uv-checkbox" class="uv-checkbox-label">
                    <div class="uv-checkbox-icon">
                        <svg viewBox="0 0 24 24" class="uv-checkmark">
                            <path d="M4.1,12.7 9,17.6 20.3,6.3" fill="none"></path>
                        </svg>
                    </div>
                    <span class="uv-checkbox-text">Remember Me!</span>
                </label>
            </div>


            <button class="button-confirm">Let's go →<br></button>
            <p style="text-align: center;">Don't have an account? <a href="signup.php">Sign Up Now</a>.</p>
        </form>

    </div>

    <style>
        p {
            font-family: serif;
            font-size: 15px;
            color: #4B3B30;
            /* Brown color */
        }

        p a {
            color: maroon;
            /* Brown color */
            text-decoration: none;
        }

        p a:hover {
            color: aliceblue;
            text-decoration: underline;
        }


        .form {
            width: 565px;
            --input-focus: #9A5A0C;
            --font-color: #4B3B30;
            --font-color-sub: #9A5A0C;
            --bg-color: #FFDEB3;
            --main-color: black;
            padding: 29px;
            background: #FFC682;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            gap: 20px;
            border-radius: 15px;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);
        }

        .title {
            color: var(--font-color);
            font-weight: 900;
            font-size: 20px;
            margin-bottom: 25px;
        }

        .title span {
            color: var(--font-color-sub);
            font-weight: 600;
            font-size: 17px;
        }

        .input {
            width: 500px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 15px;
            font-weight: 600;
            color: var(--font-color);
            padding: 5px 10px;
            outline: none;
        }

        .button-confirm {
            margin: 50px auto 0 auto;
            width: 220px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: #FCB481;
            box-shadow: 4px 4px var(--main-color);
            font-size: 17px;
            font-weight: 600;
            color: var(--font-color);
            cursor: pointer;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .uv-checkbox-wrapper {
            display: inline-block;
        }

        .uv-checkbox {
            display: none;
        }

        .uv-checkbox-label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .uv-checkbox-icon {
            position: relative;
            width: 2em;
            height: 2em;
            border: 2px solid #9A5A0C;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            transition: border-color 0.3s ease, border-radius 0.3s ease;
        }

        .uv-checkmark {
            position: absolute;
            top: 0.1em;
            left: 0.1em;
            width: 1.6em;
            height: 1.6em;
            fill: none;
            stroke: #000;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 24;
            stroke-dashoffset: 24;
            transition: stroke-dashoffset 0.5s cubic-bezier(0.45, 0.05, 0.55, 0.95);
        }

        .uv-checkbox-text {
            margin-left: 0.5em;
            transition: color 0.3s ease;

        }

        .uv-checkbox:checked+.uv-checkbox-label .uv-checkbox-icon {
            border-color: #000;
            border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            background-color: #9A5A0C;
        }

        .uv-checkbox:checked+.uv-checkbox-label .uv-checkmark {
            stroke-dashoffset: 0;
        }

        .uv-checkbox:checked+.uv-checkbox-label .uv-checkbox-text {
            color: #9A5A0C;
        }

    </style>
</body>

</html>
