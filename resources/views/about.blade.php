<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        nav {
            background-color: #444;
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to My Website</h1>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="{{route('about')}}">About</a>
        <a href="javascript:void(0)">Services</a>
        <a href="javascript:void(0)">Contact</a>
    </nav>

    <main>
        <h2>About</h2>
        <p>This is a simple HTML About page layout.</p>
    </main>

    <footer>
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>

</body>
</html>
