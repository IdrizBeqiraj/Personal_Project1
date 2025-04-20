<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
        }

        /* Header Background */
        .top-banner {
            background: url('construction.jpg') no-repeat center center;
            background-size: cover;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 2px;
        }

        /* Red Bar with Welcome */
        .welcome-bar {
            background-color: #e60000;
            color: white;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: bold;
        }

        /* Navigation Bar */
        .nav-bar {
            background-color: #000;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            padding: 0 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 18px 0;
            font-weight: 500;
        }

        .nav-links a.active {
            color: red;
        }

        .search-box {
            background-color: red;
            padding: 18px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .search-box::before {
            content: "\1F50D"; /* Unicode for 🔍 */
            font-size: 18px;
            color: white;
        }

        /* Footer-style bottom bar */
        .footer-bar {
            background-color: #e60000;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Background banner with text -->
    <div class="top-banner">
        HOME
    </div>

    <!-- Red bar with "Welcome" -->
    <div class="welcome-bar">
        Welcome
    </div>

    <!-- Navigation -->
    <div class="nav-bar">
        <div class="nav-links">
            <a href="#" class="active">Home</a>
            <a href="#">Rreth Nesh</a>
            <a href="#">Service</a>
            <a href="#">Lajmet</a>
            <a href="#">Services</a>
            <a href="#">Temp 2</a>
            <a href="#">Welcome</a>
            <a href="#">Sample Page</a>
        </div>
        <div class="search-box"></div>
    </div>

    <!-- Footer Bar -->
    <div class="footer-bar">
        Construction Engineering WordPress Theme By Themespride
    </div>

</body>
</html>
