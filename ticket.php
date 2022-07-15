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
$age = $_POST['age'];
$member = $_POST['member'];
$date = $_POST['date'];
$time = $_POST['time'];
$number = $_POST['number'];

$sql = "INSERT INTO `ticket`.`ticket` (`name`, `age`, `member`, `date`, `time`, `number`, `dt`) VALUES ('$name', '$age', '$member', '$date', '$time', '$number', current_timestamp());";

if($con->query($sql) == true){


echo "<p class='submsg'  > Thanks For Showing your interest!!!! We have been booked your ticket!!! You will receive the confirmation message on our registered number.</p>";
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
    <title>BooK Tickets</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form {
            width: 700px;
            height: 500px;
            color: rgb(0, 0, 0);
            font-weight: bolder;
            position: absolute;
            font-size: 25px;
        }

        body {
            background: url('bg3.jpg') no-repeat center center/cover;
            height: 100vh;
        }

        form input,
        select {
            margin-top: 20px;
            font-size: 20px;
            padding: 1px;
            width: 300px;
        }
        .submsg{
            color: white;
            position: absolute;
            top: 10vh;
            z-index: 3;
            left: 30vw;
            width: 650px;
            display: flex;
            flex-direction: column;
            text-align: center;
            color: rgb(230, 0, 0);
            font-size: 30px;

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

        form {
            top: 160px;
            text-align: center;
            margin-left: 300px;
        }

        form #time {
            width: 250px;
        }

        form pre {
            display: inline;
        }
    </style>
</head>

<body>
    <div class="navbar">

        <div class="logo">
            <img src="logo.png" alt="" width="100px">
        </div>
        <nav>
            <ul>
            <li ><a href="http://127.0.0.1:5500/index.html">Home</a></li>
                <li><a href="http://127.0.0.1:5500/blog.html">Blog</a></li>
                <li><a href="http://localhost/Travel%20Blog">Contact Us</a></li>
                <li><a href="http://localhost/Travel%20Blog/ticket.php">Book Tickets</a></li>
            </ul>
        </nav>

    </div>
    <form action="ticket.php" method = "post">
        <pre>     Name:              </pre>
        </Name:> <input type="text" id = "name" name="name"><br>
        <pre>    Enter Your Age:     </pre> <input type="number" max="105" id = "age" name="age"><br>
        <pre>    No. of Members:     </pre> <input type="number" max="20" id = "member" name="member"><br>
        <pre>   Select the Journey Date: </pre><input type="date" id="time" id = "date" name="date"><br>
        <pre>    Select the Time:    </pre> <input type="time" id = "time" name="time"> <br>
        <pre>    Mobile No.:         </pre> <input type="number"  id = "number" name = number><br>
        <div class="btn">
            <button type="submit" id="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
  
    <script>
        var btn = document.getElementById('submit')
        document.querySelector('#submit').addEventListener("click", () => {
            confirm("Are you sure want to book this ticket!!!!!!!")
        })
    </script>
</body>

</html>