<html>
<head>
    <title>Shop Management System</title>
</head>

<body>
    <h3>Employee Registration</h3>
    <form action="../controller/reg_val.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="contact">Contact No:</label><br>
        <input type="text" id="contact" name="contact" required><br><br>

        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Register</button><br><br>
        <label>Already have account?</label>
        <a href="login.php">Login</a>
    </form>


    <script>
        function displayMessage(msg, color = 'green')
        {
            message = document.getElementById('message');
            message.textContent = msg;
            messag.style.color = color;
            setTimeout
        }

        function registerEmployee()
        {

        }
    </script>

</body>
</html>
