
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        require_once 'public/dbconnect.php';
        require_once 'public/functions.php';

        function addData($connect,$fullname,$email,$password){
            try {
                $sql = "INSERT INTO signup VALUES ('$fullname','$email','$password')";
        
            $result = mysqli_query($connect,$sql);
            if ($result) {
                echo "record created successfully!";
            }else{
                die("Error".mysqli_error($connect));
            }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //echo "Get the post request from the client";
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

        }

        addData($connect,$fullname,$email,$password);

    ?>
    <div class="container">
        <div class="left-section">
            
            <h1> Shop the Latest Smartphones with Unmatched Deals and Features!</h1>
        </div>
        <div class="right-section">
            <div class="form-container">
                <h2>Sign Up</h2>
                <p>Already have an account? <a href="login.php">Log in</a></p>
                <form action="#">
                    <div class="input-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" required placeholder="Must be at least 6 characters" >
                        <i class="far fa-eye-slash"></i>
                        
                    </div>
                    <div class="input-group">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="confirmpassword" id="confirmpassword" required>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="newsletter">
                        <label for="newsletter">Sign up for email updates</label>
                    </div>
                    <button type="submit" class="signup-btn">Sign Up</button>
                    <section class="copy legal">
                        <p><span class="small">By continuing,you agree to accept our <a href="#">Privacy Policy</a> &amp;<a href="#"><br>Terms of Service</a>.</span></p>
                    </section>
                </form>
            </div>
        </div>
    </div>
</body>
</html>