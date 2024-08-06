
]<?php
require "../db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $interests = $_POST['interests'];


    echo "<h2>Form Data Collected</h2>";
    echo "Full Name: " . $fullname . "<br>";
    echo "Phone Number: " . $phonenumber . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Interests: " . $interests . "<br>";


    $sql = "INSERT INTO subscriber (fullname, phonenumber, email, interests)
    VALUES ('$fullname', '$phonenumber', '$email', '$interests')";
    $insert = mysqli_query($conn, $sql);
    if ($insert) {
        echo "New record created successfully";
    } else {
        echo "Error ";
    }
    mysqli_close($conn);
}
