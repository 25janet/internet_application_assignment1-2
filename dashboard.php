<?php
session_start();

// Simulated login (Replace with actual authentication)
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'JohnDoe'; // Example user
}

// Logout logic
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Dashboard Container */
        .dashboard {
            width: 80%;
            max-width: 600px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .menu {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }

        .menu a {
            text-decoration: none;
            color: white;
            background: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .menu a:hover {
            background: #0056b3;
        }

        .logout {
            margin-top: 20px;
            display: inline-block;
            background: red;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .logout:hover {
            background: darkred;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Choose an option below:</p>
    
    <div class="menu">
        <a href="#">🏠 Home</a>
        <a href="#">👤 Profile</a>
        <a href="#">⚙️ Settings</a>
    </div>

    <a href="?logout=true" class="logout">Logout</a>
</div>

</body>
</html>
