<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .sidebar {
            width: 250px;
            background-color: #444;
            color: #fff;
            padding: 20px;
        }
        .main-content {
            flex: 1;
            background-color: #fff;
            padding: 20px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Dashboard</h1>
    </div>
    <div class="container">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li>Menu Item 1</li>
                <li>Menu Item 2</li>
                <li>Menu Item 3</li>
                <li>Menu Item 4</li>
            </ul>
        </div>
        <div class="main-content">
            <h2>Main Content</h2>
            <p>Welcome to your dashboard!</p>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Dashboard App</p>
    </div>
</body>
</html>
