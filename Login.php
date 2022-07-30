<?php
$insert = false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($sql);
$name=$_POST['name'];
$email=$_POST['email'];
$cnic=$_POST['cnic'];
$phone=$_POST['phone'];
$destination=$_POST['destination'];
$event=$_POST['event'];
$desc=$_POST['desc'];
$sql="INSERT INTO `event`.`final1`( `name`, `email`, `cnic`, `phone`, `destination`,`event`, `other`,  `ddt`) VALUES ('$name', '$email', '$cnic', '$phone','$destination', '$event','$desc', current_timestamp());";
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
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
<html>
    <head>
        <title>Booking Form</title>
        <link rel="stylesheet" href="Login.css">
    </head>
    <body>
        <h1><i>Please Enter Your Details For Confirmation of Booking</i></h1>>
        <?php
        if($insert == true){
        echo "<h1 class='submitMsgs'>Thanks for submitting your Details. We are happy to Organize the Event.<br> A confirmation Email has been Sent</h1>";
        }
    ?>
        <form name="myform" class="container" action="login.php" onsubmit="return validateform()" method="POST">
            <input type="text" name="name" placeholder="Full Name"><br>
            <input type="text" name="email" placeholder=" Email Address"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
            <input type="text" name="cnic" placeholder=" CNIC in format 00000-0000000-0" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}"><br>
            <input type="text" name="phone" placeholder="Phone Number 0300-0000000" pattern="[0-9]{4}-[0-9]{7}"><br>
            <input type="text" name="destination" placeholder="Enter the location where you want to organize event"><br>
            <p>Select the Event you want Us to Organize</p>
            <select name="event" required>
                <option value="Not Selected">Select Event:</option>
                <option value="Indoor Bridal Shower Event__________________________RS 65000/- to RS 75000/-" >Indoor Bridal Shower Event__________________________RS 65000/- to RS 75000/-</option>
                <option value="Outdoor Bridal Shower Event__________________________RS 100000/- to RS 150000/- " >Outdoor Bridal Shower Event__________________________RS 100000/- to RS 150000/- </option>
                <option value="Indoor Mehndi Event__________________________RS 150000/- to RS 200000/- " >Indoor Mehndi Event__________________________RS 150000/- to RS 200000/- </option>
                <option value="Outdoor Mehndi Event__________________________RS 300000/- to RS 600000/- " >outdoor Mehndi Event__________________________RS 300000/- to RS 600000/- </option>
                <option value="Indoor Barat Event__________________________RS 200000/- to RS 350000/- " >Indoor Barat Event__________________________RS 200000/- to RS 350000/- </option>
                <option value="Outdoor Barat Event__________________________RS 300000/- to RS 700000/-" >Outdoor Barat Event__________________________RS 300000/- to RS 700000/-</option>
                <option value="Indoor Walima Event__________________________RS 200000/- to RS 350000/-" >Indoor Walima Event__________________________RS 200000/- to RS 350000/-</option>
                <option value="Outdoor Walima Event__________________________RS 300000/- to RS 700000/-" >Outdoor Walima Event__________________________RS 300000/- to RS 700000/-</option>
                <option value="Indoor Full Wedding Package__________________________RS 800000/- to RS  100000/-" >Indoor Full Wedding Package__________________________RS 800000/- to RS 100000/-</option>
                <option value="Outdoor Full Wedding Package__________________________RS 120000/- to RS 150000/-" >Outdoor Full Wedding Package__________________________RS 120000/- to RS 150000/-</option>
                <option value="Indoor Anniversary Event__________________________RS 40000/- to RS 85000/- " >Indoor Anniversary Event__________________________RS 40000/- to RS 85000/-</option>
                <option value="Outdoor Anniversary Event__________________________RS 100,000/-" >Outdoor Anniversary Event__________________________RS 100,000/-</option>
                <option value="Destination Wedding__________________________Prices will be negotiated according to venues" >Destination Wedding__________________________Prices will be negotiated according to venues</option>
                <option value="Indoor Birthday Party__________________________RS 40000/- to RS 85000/-">Indoor Birthday Party__________________________RS 40000/- to RS 85000/-</option>
                <option value="Outdoor Birthday Party__________________________RS 100,000/-" >Outdoor Birthday Party__________________________RS 100,000/-</option>
              </select><br>
              <textarea name="desc" id="desc" placeholder="Enter any other information here"></textarea><br>
            <button class="btn">Submit</button>
        </form>
        <script src="Login.js"></script>
    </body>
</html>