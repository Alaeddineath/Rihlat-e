<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <link href="assets/css/signup.css" rel="stylesheet" type="text/css" >
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="assets/css/signup.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h1><a href="index.php">RIHLAT-e</a></h1>
    </div>
    <div class="container">
        <h1> reserve a trip</h1>
        <form method="post">
            <label>is the transport included?</label>
           <label> <input type="radio" name="transport" value="yes" checked> Yes </label>
         <label> <input type="radio" name="transport" value="no"> No <label> <br>
          <button type="submit" name="submit" href="test.php">reserve now</button>

        </form>
    </div>
    <?php
    session_start();
        // Establish a connection to the database
        include 'include/dbconnect.php';
        $travel_id=$_GET['id'];

        $user_id=$_SESSION['user_id'] ;
        // Check if the connection was successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if the form was submitted
        if (isset($_POST['submit'])) {
            // Retrieve the form data
            $transport=$_POST['transport'];
            // Insert the user data into the database
            $sql = "INSERT INTO reservation (user_ID ,travel_plan_id,reservation_id,reservation_date,transport) VALUES ('$user_id', '$travel_id', '', CURRENT_DATE , '$transport')";
            if (mysqli_query($conn, $sql)) {
                
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        // Close the database connection
        mysqli_close($conn);
    ?>
</body>
</html>