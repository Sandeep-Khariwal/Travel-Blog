<?php
error_reporting(0);
if(isset($_POST['name'])){
$server = "localhost";
$username= "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("Connection Error" . mysqli_connect_error());
}


$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO `contact`.`contact` (`name`, `number`, `email`, `address`, `dt`) VALUES ('$name', '$number', '$email', '$address', current_timestamp());";

if($con->query($sql) == true){


echo "<p class='submsg'  > Thanks For Showing your interest!!!! We will contact you soon...</p>";
 }
}

$con->close;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <style>
        body {
            background: url('contactbg.jpg') no-repeat center center/cover;
            height: 90vh;
        }

        .container h1 {
            color: white;
            position: absolute;
            top: 36vh;
            left: 20vw;
            font-size: 51px;

        }

        .submsg{
            color: white;
            position: absolute;
            top: 46vh;
            left: 12vw;
            color: rgb(230, 0, 0);
            font-size: 20px;

        }

        form {
            color: rgb(0, 0, 0);
            font-weight: bolder;
            border: 2px solid white;
            border-radius: 20px;
            width: 35vw;
            height: 45vh;
            position: absolute;
            padding-left: 100px;
            padding-top: 130px;
            top: 30vh;
            left: 10vw;
            font-size: 25px;

        }

        form input {
            margin-top: 20px;
            font-size: 20px;
            padding: 1px;
            width: 300px;
        }

        .btn button {
            cursor: pointer;
            font-size: 17px;
            margin-top: 30px;
            margin-left: 30px;
            padding: 3px;
            border: 2px solid rgb(39, 37, 37);
            border-radius: 10px;
        }

        .btn {
            margin-left: 80px;
        }

        .btn button:hover {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="" width="100px">
        </div>
        <nav>
            <ul >
                <li ><a href="http://127.0.0.1:5500/index.html">Home</a></li>
                <li><a href="http://127.0.0.1:5500/blog.html">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="http://localhost/Travel%20Blog/ticket.php">Book Tickets</a></li>
            </ul>
        </nav>

    </div>
    <div class="container" >
        <h1>Contact Form</h1>
      
    
        <form action="index.php" method="post">
            Name <span style = "color: red">*</span>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
            <br>
            Phone No.<span style = "color: red">*</span> <input type="number" name="number" id="number" placeholder="Enter your phone Number" required> <br>
            Email Id <span style = "color: red">*</span>&nbsp;&nbsp;&nbsp;<input type="email" name="email" id="email" placeholder="Enter Your Email Id" required>
            <br>
            Address:&nbsp;&nbsp; <input type="text" name="address" id="address" placeholder="Enter Your Address" required>
            <div class="btn">
                <button type="submit" id="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>


        </form>
    </div>
    <script src="script.js"></script>

</body>

</html>
