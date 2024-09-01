<?php
$con = mysqli_connect('localhost', 'root', '', 'portfolio');

if ($con) {
    echo "Connection Successful";
} else {
    echo "No connection";
}

mysqli_select_db($con, 'portfolio');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$query = "INSERT INTO contact_info(name, email, mobile, message) 
          VALUES ('$name', '$email', '$mobile', '$message')";

// Execute the query
if (mysqli_query($con, $query)) {
    header ('location:index.php');
} else {
    echo "Error: " . mysqli_error($con);
}
?>