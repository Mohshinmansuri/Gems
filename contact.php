<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $dob = $_POST['dob'];
    $number = $_POST['number'];
    $numberd = $_POST['numberd'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO `gems`.`gems` (`name`, `fname`, `mname`, `dob`, `number`, `numberd`, `email`, `gender`, `date`) VALUES ('$name', '$fname', '$mname', '$dob', '$number', '$numberd', '$email', '$gender', current_timestamp());";


    if($con->query($sql) == true){
        echo "Successfully inserted";

        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="contact/style.css">
</head>

<body>
    <Main>
        <h1>Register here</h1>
        <form action="contact.php" method="post">
            <div class="flex">
                <p>Name <b style="color: red;">*</b> :</p>
                <input type="text" name="name" id="name" placeholder="Enter Student's Name" required>
                <br>
                <p>Father's Name <b style="color: red;">*</b> :</p>
                <input type="text" name="fname" id="fname" placeholder="Enter Father's Name" required>
                <br>
            </div>
            <div class="flex">
                <p>Mother's Name <b style="color: red;">*</b> :</p>
                <input type="text" name="mname" id="mname" placeholder="Enter Mother's Name" required>
                <br>
                <p>Date Of Birth <b style="color: red;">*</b> :</p>
                <input type="date" name="dob" id="dob" placeholder="Enter Student's Age" required>
                <br>
            </div>
            <div class="flex">
                <p>Mobile Number <b style="color: red;">*</b> :</p>
                <input type="number" name="number" id="number" placeholder="Mobile Number" required>
                <br>
                <p>Mobile Number 2 :</p>
                <input type="number" name="numberd" id="numberd" placeholder="Mobile Number">
                <br>
            </div>
            <div class="flex">
                <p>Email :</p>
                <input type="email" name="email" id="email" placeholder="Enter Your Email Address">
                <br>
                <p>Gender <b style="color: red;">*</b> :</p>
                <input type="text" name="gender" id="gender" placeholder="Enter Your Gender(M/F/O)" required>
                <br>
            </div>
            <br><br>
            <div class="submit">
            <input type="submit" value="Submit" id="submit">
        </div>
        </form>
    </Main>
    <div class="creater">
        <address>
            <p>@mohshin123</p>
        </address>
    </div>



</body>

</html>