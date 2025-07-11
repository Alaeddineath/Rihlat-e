<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
     <h1><a href="index.php">RIHLAT-e</a></h1>
 </div>
    <div class="container">
                <form method="post">
                <h1>Log In</h1>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="ceo">CEO</option>
                    <option value="employee">Employee</option>
                </select>

                <button type="submit" name="login">Login</button>
                </form>
    </div>

    <?php
// Start the session
session_start();

// Define database connection variables
include '../../include/dbconnect.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the login form has been submitted
if(isset($_POST['login'])) {
    // Get email, password, and role from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Query the database to check the user's credentials
    $sql = "SELECT * FROM employee WHERE email='$email' AND password='$password' AND role = '$role'";
    $result = mysqli_query($conn, $sql);
    

    // Check if the query returned any rows
    if(mysqli_num_rows($result) == 1) {
        $row = $result->fetch_assoc();
        $name = $row['first_name']; 
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role;
    
        if ($role == 'ceo') {
            header("Location: ceo/index.php");
            exit();
        } else if ($role == 'employee') {
            header("Location: employee/index.php");
            exit();
        }
    } else {
        // Invalid login, show an error message
        echo "<h1>Invalid email, password, or role. Please try again.</h1>";
    }
}


// Close the database connection
mysqli_close($conn);
?>


</body>
</html>