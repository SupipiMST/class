<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $NIC = $_POST['NIC'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $no = $_POST['no'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sub = $_POST['sub'];
    $gender = $_POST['gender'];

    if (empty($NIC) || empty($fullname) || empty($address) || empty($no) || empty($email) || empty($password) || empty($sub) || empty($gender)) {
        echo "All fields are required.";
    } else {
        
        include "config.php"; 
     
        $sql = "INSERT INTO user1 (NIC, fullname, address, no, email, password, sub, gender) 
                VALUES ('$NIC', '$fullname', '$address', '$no', '$email', '$password', '$sub', '$gender')";

       
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful.";
            header("Location:home.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
} else {
    header("Location:home.php");
    exit();
}
?>
