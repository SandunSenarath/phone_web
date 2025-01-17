<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            
            <!--<h1> Shop the Latest Smartphones with Unmatched Deals and Features!</h1>-->
        </div>
        <div class="right-section">
            <div class="form-container">
                <h2>Sign In</h2>
                <p>Create an account? <a href="page.php">Sign Up</a></p>
                <form action="#">
                    <!--<div class="input-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" required>
                    </div>-->
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" required placeholder="Must be at least 6 characters" >
                        <i class="far fa-eye-slash"></i>
                        
                    </div>
                    <!--<div class="input-group">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="confirmpassword" id="confirmpassword" required>
                    </div>-->
                    <!--<div class="checkbox-group">
                        <input type="checkbox" id="newsletter">
                        <label for="newsletter">Sign up for email updates</label>
                    </div>-->
                    <button type="submit" class="signup-btn">Sign In</button>
                    <section class="copy legal">
                        <p><span class="small">By continuing,you agree to accept our <a href="#">Privacy Policy</a> &amp;<a href="#"><br>Terms of Service</a>.</span></p>
                    </section>
                </form>
            </div>
        </div>
    </div>
    <?php
    function getData($connect){
    try {

        if(isset($_POST['submit'])){

            $email = $_POST['email'];
            $password=$_POST['password'];

        $sql = "select email,password from customer where email='$email'";

            
        $result = mysqli_query($connect,$sql);

        $row = mysqli_fetch_assoc($result);
        $countrec = mysqli_num_rows($result);
        $uname=$row['email'];
        $pword=$row['password'];

        //echo $pword;
        
            if($email == 'admin@gmail.com' && $password == $pword){

                header("Location:../index.php");
                // echo "<script>
               
                //             window.open('../public/admin.php ', '_blank');  
                //             window.location.href = 'payment.php' 
                //                 </script>";

            }
            else if($uname == $email && $password == $pword){

                header("Location:payment.php");
            // echo "<script>
               
            //         window.open('payment.php ', '_blank');  
            //         window.location.href = 'Home Heaven Furniture.php' 
            //             </script>";
            }else{
                echo "<script>
                        alert('Password is incorrect! Try Again');
                        document.getElementById('loginForm').reset();
                    </script>";
            }
        
    
        
        
        


     
    } 
}catch (Exception $e) {
        die($e->getMessage());
    }
}

try{
    if(isset($_POST['submit'])){
    $name = $_POST['email'];
    $password = $_POST['password'];

    getData($connect,$name,$password);

}
}catch(Exception $e)
{}
    
?> 
</body>
</html>