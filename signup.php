<?php
// Include config file
require_once "config.php";

// Start the session
session_start();

// Check if the user is already signed up, if yes then redirect them to the login page
if (isset($_SESSION["signedup"]) && $_SESSION["signedup"] === true) {
    header("location: loginfyp.php");
    exit;
}

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);
                
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                $username_err = "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm the password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                $_SESSION["signedup"] = true; // Set a session variable to indicate successful signup
                header("location: loginfyp.php");
                exit;
            } else {
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
    <title>Sign Up</title>
    <style>
        html,
        body {
            overflow: hidden;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #e5e5f7;
            width: 100%;
        }

        .form-container {
            margin-bottom: 0;
            padding: 10px 0px;
            box-shadow: 0 -4px 8px 6px rgba(0, 0, 0, 0.1);
            background-image: url(img/Front_House_BG_v2%5B1%5D.png);
            height: 100%;
            background-size: cover;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container10 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .form_area {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #A8E4DB;
            width: 600px;
            height: auto;
            max-width: 600px;
            padding: 20px;
            box-sizing: border-box;
            border: 2px solid #264143;
            border-radius: 20px;
            box-shadow: 3px 4px 0px 1px #FD7B7B;
        }

        .title {
            color: #264143;
            font-weight: 900;
            font-size: 1.5em;
            margin-top: 20px;
        }

        .sub_title {
            font-weight: 600;
            margin: 5px 0;
        }

        .form_group {
            display: flex;
            flex-direction: column;
            align-items: baseline;
            margin: 10px;
        }

        .form_style {
            outline: none;
            border: 2px solid #264143;
            box-shadow: 3px 4px 0px 1px #FD7B7B;
            width: 440px;
            padding: 12px 10px;
            border-radius: 4px;
            font-size: 15px;
        }

        .form_style:focus,
        .btn10:focus {
            transform: translateY(4px);
            box-shadow: 1px 2px 0px 0px #FD7B7B;
        }

        .btn10 {
            padding: 15px;
            margin: 25px 0px;
            width: 240px;
            font-size: 15px;
            background: #3EA595;
            border-radius: 10px;
            font-weight: 1000;
            box-shadow: 3px 3px 0px 0px #FD7B7B;
        }

        .btn10:hover {
            opacity: .900;
        }

        .link {
            font-weight: 800;
            color: #264143;
            padding: 5px;
        }

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
            color: beige;
            text-decoration: underline;
        }

    </style>
</head>

<body>
    <div id="form" class="container-fluid form-container">
        <div class="container-fluid10">
            <div class="container10">
                <div class="form_area">
                    <p class="title">🍃 SIGN UP FOR MORE GREAT STUFF! 🍃</p>
                    <form id="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form_group">
                            <label class="sub_title" for="username">Username</label>
                            <input name="username" placeholder="Enter your username" id="username" class="form_style <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($username); ?>" type="text" required>
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>

                        <div class="form_group">
                            <label class="sub_title" for="password">Password</label>
                            <input name="password" placeholder="Enter your password" id="password" class="form_style <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($password); ?>" type="password" required>
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form_group">
                            <label class="sub_title" for="confirm_password">Confirm Password</label>
                            <input name="confirm_password" placeholder="Confirm your password" id="confirm_password" class="form_style <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($confirm_password); ?>" type="password" required>
                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div>
                            <button type="submit" id="signupButton" class="btn10">SIGN UP</button>
                        </div>
                        <p>Already have an account? <a href="loginfyp.php">Login here</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
