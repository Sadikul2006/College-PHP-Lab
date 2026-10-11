<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog - CMS</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: #2563eb;
            color: white;
            text-align: center;
            padding: 30px 15px;
        }

        header h1 {
            font-size: 32px;
        }

        nav {
            background: #1e293b;
            padding: 14px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }

        nav a:hover {
            color: #93c5fd;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .container > h2 {
            margin-bottom: 20px;
        }

        .post {
            background: white;
            padding: 22px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #00000010;
        }

        .post h3 {
            color: #2563eb;
            margin-bottom: 10px;
        }

        .post p {
            margin-bottom: 12px;
        }

        .post small {
            color: #777;
        }

        footer {
            background: #1e293b;
            color: white;
            text-align: center;
            padding: 18px;
            margin-top: 40px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 26px;
            }

            nav a {
                margin: 0 7px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>My Blog</h1>
        <p>Read and Explore New Articles</p>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Author Login</a>
    </nav>

    <main class="container">
        <h2>Latest Posts</h2>

        <article class="post">
            <h3>Introduction to PHP</h3>
            <p>
                PHP is a server-side scripting language used
                to create dynamic websites and web applications.
            </p>
            <small>Author: Admin | October 11, 2026</small>
        </article>

        <article class="post">
            <h3>Introduction to MySQL</h3>
            <p>
                MySQL is a database management system used
                to store and manage website data.
            </p>
            <small>Author: Admin | October 11, 2026</small>
        </article>

    </main>

    <footer>
        <p>&copy; 2026 My Blog. All rights reserved.</p>
    </footer>

</body>
</html>