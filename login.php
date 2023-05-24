<?php
session_start();
include 'include/dbconnect.php';
$error_message = '';

if (isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        // Set session variable and redirect to loggedindex.php
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        header('Location: loggedindex.php');
        exit;
    } else {
        echo 
        '<script>
        alert("Invalid email or password");
        </script>';
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="assets/css/log.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <body id="hero">
    <div class="hero-container">
        <h1><a href="index.php">RIHLAT-e</a></h1>
     <div class="container">
         <form method="post">
             <h1> Log In</h1>
             <label for="email">Email</label>
             <input type="email" id="email" name="email" required>
             <label for="password">Password</label>
             <input type="password" id="password" name="password" required>
             <button type="submit" name="login">Login</button>
             <p>Don't have an account? <a href="signup.php">Sign up</a></p>
            </form>
            <?php if ($error_message !== '') { ?>
                <div class="error-message">
                    <?php echo '<h1>' . $error_message . '</h1>'; ?>
                </div>
                
                <?php } ?>
            </div>
    </div>
</body>
</html>
