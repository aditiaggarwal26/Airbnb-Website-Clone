<?php
// Show errors (VERY IMPORTANT for debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get place name
$place = isset($_GET['place']) ? $_GET['place'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Now</title>
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: #f7f7f7;
        margin: 0;
    }

    .booking-container {
        width: 420px;
        margin: 60px auto;
        background: #fff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }

    .booking-container h2 {
        text-align: center;
    }

    .label {
        font-weight: 600;
        margin-top: 10px;
        display: block;
    }

    .booking-container input {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 10px;
    }

    .booking-container button {
        width: 100%;
        padding: 12px;
        margin-top: 20px;
        background: #ff385c;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }
    </style>
</head>
<body>
<div class="booking-container">

    <h2>Book Your Stay</h2>

<!-- <h2>Booking for: <?php echo $place; ?></h2> -->

<form action="save_booking.php" method="POST">

    <input type="text" name="place" value="<?php echo $place; ?>" readonly><br><br>

    <input type="text" name="name" placeholder="Your Name" required><br><br>

    <input type="email" name="email" placeholder="Email" required><br><br>

    <input type="text" name="phone" placeholder="Phone" required><br><br>

    <label class="label">Check-in Date</label>
    <input type="date" name="checkin" required>

    <label class="label">Check-out Date</label>
    <input type="date" name="checkout" required>
<br><br>

    <button type="submit">Confirm Booking</button>

</form>
</div>
</body>
</html>
<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: #f7f7f7;
        margin: 0;
    }

    .booking-container {
        width: 420px;
        margin: 60px auto;
        background: #fff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }

    .booking-container h2 {
        text-align: center;
    }

    .label {
        font-weight: 600;
        margin-top: 10px;
        display: block;
    }

    .booking-container input {
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 10px;
    }

    .booking-container button {
        width: 100%;
        padding: 12px;
        margin-top: 20px;
        background: #ff385c;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }
</style>