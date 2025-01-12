<html>
<head>
    <title>Shop Management System</title>
</head>

<body>
    <h3>Employee Login</h3>
    <form action="login_val.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button><br><br>
        
    </form>
    <label>Don't have any account?</label>
    <a href="registration.php">Register here</a>
</body>
</html>
