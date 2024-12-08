<?php
session_start ();

$email = $password = "";
$emailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required.";
    } else {
        $password = $_POST["password"];
    }

    if ($email && $password) {
        $host = "localhost:3307";
        $dbname = "furryconnect";
        $db_username = "root";
        $db_password = "";

        $conn = mysqli_connect($host, $db_username, $db_password, $dbname);

        if (mysqli_connect_errno()) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $check_email = mysqli_query($conn, "SELECT * FROM signup WHERE email = '$email'");

        if (!$check_email) {
            die("Query failed: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($check_email) > 0) {
            $row = mysqli_fetch_assoc($check_email);
            $db_password = $row["password"];

            if ($db_password === $password) {
                $_SESSION['email'] = $email;
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['id'] = $row['id'];  // Store user id in session
                echo "
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            swal({
                                title: 'Login Successful!',
                                text: 'Welcome back!',
                                icon: 'success'
                            }).then(() => {
                                window.location.href = '../home/home';  // Or profile page
                            });
                        });
                    </script>
                ";
            } else {
                $passwordErr = "Incorrect password.";
            }
        } else {
            $emailErr = "Email is not registered.";
        }

        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryConnect</title>
    <link rel="stylesheet" href="./furry_login.css">
    <link rel="icon" href="../Icons/Main_Logo.png">
</head>

<body>

    <nav>
        <img src="../Icons/Main_Logo.png">
        <ul>
            <li id="modal-trigger"><a>Login</a></li>
        </ul>
    </nav>

    <main>
        <section class="bg1">
            <section class="bg2"></section>
        </section>

        <section class="learnmore" id="default-item" class="login">
            <img id="learn-bg" src="../Icons/dog.png">
            <ul>
                <li><a id="modal-trigger"></a></li>
                <li>
                    <p>Visit our website to learn more and find the perfect pet to share your life with.</p>
                </li>
            </ul>
        </section>

        <section class="sub-login-wrap" id="modal">
            <section class="sub-login">
                <form id="loginForm" class="user-info" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="email" placeholder="Email" id="email" name="email" required value="<?php echo $email; ?>">
                    <span class="error text-danger"><?php echo $emailErr; ?></span>

                    <input type="password" placeholder="Password" id="password" name="password" required>
                    <span class="error text-danger text-center"><?php echo $passwordErr; ?></span>
                    <img id="eye" src="../Icons/eye-slash.svg" alt="Show Password" id="eyeIcon">

                    <div class="remember-forgot">
                        <label><input type="checkbox" id="check">Remember me</label>
                        <a id="forgot" href="#">Forgot password</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>

                    <div class="register-link">
                        <p>Don't have an Account?<a href="../signup/signup">Sign Up</a></p>
                    </div>
                </form>
            </section>
        </section>
    </main>

    <footer>
        <section class="termsandcondition">
            <p>For questions about FurryConnect, please contact the Service Department at FurryConnect@gmail.com or 8123-4567. Additional resources, including claim forms and FAQs, can be found on our FurryConnect webpage: furryconnect.com.</p>
        </section>
    </footer>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./furry_login.js"></script>

    <script>
        const passwordInput = document.getElementById("password");
        const eyeIcon = document.getElementById("eyeIcon");

        eyeIcon.addEventListener("click", function() {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.src = "../Icons/eye.svg";
            } else {
                passwordInput.type = "password";
                eyeIcon.src = "../Icons/eye-slash.svg";
            }
        });
    </script>
</body>

</html>