<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $dl_no = $_POST['dlno'];
    $pickup_location = $_POST['pickup'];
    $drop_location = $_POST['drop'];
    $vehicle = $_POST['vehicle'];
    $cost_per_hour = $_POST['cost'];

    $sql = "INSERT INTO registrations (name, phone, dl_no, pickup_location, drop_location, vehicle, cost_per_hour) 
            VALUES ('$name', '$phone', '$dl_no', '$pickup_location', '$drop_location', '$vehicle', '$cost_per_hour')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
