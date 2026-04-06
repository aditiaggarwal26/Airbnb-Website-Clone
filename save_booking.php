<?php
$conn = mysqli_connect("localhost", "root", "", "airbnb website");

$place = $_POST['place'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO bookings (place, name, email, phone)
        VALUES ('$place', '$name', '$email', '$phone')";

if(mysqli_query($conn, $sql)){
    // echo "Booking Successful!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
<!-- html code -->
<body>

<div class="success-box">
    <h2>✅ Booking Confirmed!</h2>
    <p>Your stay at <b><?php echo $place; ?></b> is booked.</p>

    <a href="index.php">Go Back Home</a>
</div>

</body>
</html>
<style>
body {
    font-family: Arial;
    background: #f7f7f7;
}

/* Popup box */
.success-box {
    width: 350px;
    margin: 150px auto;
    background: white;
    padding: 25px;
    text-align: center;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Tick */
.success-box h2 {
    color: green;
}

.success-box a {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 15px;
    background: #ff385c;
    color: white;
    text-decoration: none;
    border-radius: 8px;
}
</style>
</head>


