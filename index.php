<?php
$insert=false;
 if(isset($_POST['name'])){


$server= "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database failed duw to". mysqli_connect_error());

}


//echo "success connecting to db";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];
$sql = "INSERT INTO `trip1`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `de`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp()); ";
//echo $sql;

if($con->query($sql)==true){
   // echo "successfully inserted";
   $insert = true;
}
else {
    echo "ERROR : $sql <br> $con->error";

}
$con->close();
 }
?>

<!--html code-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="scet">
    <div class="container">
        <h1>Welcome to IIT karagpur </h1>
        <p>Enter your details and submit this form to confirm your participation</p>
       <?php
       if($insert==true){
     echo  "<p class='submitmsg'>Thanks for submitting form. We are happy to see you joining us for trip</p>";
       }
     ?>
        <form action="index.php" method="POST">
<input type="text" name="name" id="name" placeholder="enter your name" autocomplete="off">
<input type="text" name="age" id="gender" placeholder="age" autocomplete="off">
<input type="text" name="gender" id="gender" placeholder="gender" autocomplete="off">
<input type="email" name="email" id="email" placeholder="enter your email">
<input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">
<textarea name="other" id="other" cols="30" rows="10" placeholder="enter any information"></textarea>
<button class="btn">Submit</button>
    </form>
    
    </div>
    <script src="main.js"></script>
    <!--INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `de`) VALUES ('1', 'arbaaz', '20', 'male', 'asdasf@gmail.com', '1234567890', 'rgfdfgdfhdgdgdfgdfgdg', current_timestamp()); -->
</body>
</html>