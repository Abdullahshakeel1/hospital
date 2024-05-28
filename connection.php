
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "appointment";

// Establish a connection to the database
$coon = mysqli_connect($servername, $username, $password, $database);




    $name =  $_POST['app-NAme'];
    $cinc =  $_POST['app-cnic'];
    $lastName =  $_POST['app-NAme-Last'];
    $age =  $_POST['app-Age'];
    $radio = $_POST['rbtn']; // Sanitize radio button value
    $number =  $_POST['app-Phone'];
    $email =  $_POST['app-Email'];
    $specialty =  $_POST['Choose-Specialty'];
    $time =  $_POST['time'];
    $question =  $_POST['massage'];
    
    
    $sql = "INSERT INTO form (Name , Cinc, LastName ,  Age, Radio , Number , Email, Status, Time , Question) 
            VALUES ('$name', '$cinc', '$lastName', '$age', '$radio', '$number', '$email', '$specialty', '$time', '$question')";
$result = mysqli_query($coon, $sql);
if ($result) {
    echo "<script>alert('Task added successfully');</script>"; // Use proper JavaScript syntax
} else {
    echo "<script>alert('Failed to add task');</script>"; // Use proper JavaScript syntax
}
?>

