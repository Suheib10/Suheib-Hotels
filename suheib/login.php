<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Login</h1>
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
        <form action="loginn.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </main>
    <footer>
        <p>&copy; Suheib Hotels. All rights reserved.</p>
    </footer>
</body>
</html>
