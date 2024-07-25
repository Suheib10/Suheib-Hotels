<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bookings</h1>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="bookings.php">Bookings</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Book a Room</h2>
        <form action="book.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="room">Room Type:</label>
            <select id="room" name="room">
                <option value="single">Single</option>
                <option value="double">Double</option>
                <option value="suite">Suite</option>
            </select>
            
            <label for="checkin">Check-in Date:</label>
            <input type="date" id="checkin" name="checkin" required>
            
            <label for="checkout">Check-out Date:</label>
            <input type="date" id="checkout" name="checkout" required>
            
            <button type="submit">Book Now</button>
        </form>
    </main>
    <footer>
        <p>&copy; Suheib Hotels. All rights reserved.</p>
    </footer>
</body>
</html>
