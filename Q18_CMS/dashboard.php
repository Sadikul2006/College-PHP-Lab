<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Dashboard - My Blog</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .navbar {
            background: #1e293b;
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .navbar h2 {
            font-size: 23px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            background: #dc2626;
            padding: 9px 15px;
            border-radius: 5px;
        }

        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .welcome {
            margin-bottom: 25px;
        }

        .welcome h1 {
            margin-bottom: 8px;
        }

        .welcome p {
            color: #64748b;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #00000010;
        }

        .stat-card h3 {
            color: #64748b;
            font-size: 15px;
            margin-bottom: 12px;
        }

        .stat-card p {
            font-size: 30px;
            font-weight: bold;
            color: #2563eb;
        }

        .posts-section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #00000010;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-create {
            background: #2563eb;
        }

        .btn-edit {
            background: #16a34a;
        }

        .btn-delete {
            background: #dc2626;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 550px;
        }

        th, td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background: #f8fafc;
        }

        .status {
            background: #dcfce7;
            color: #166534;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        @media (max-width: 700px) {
            .stats {
                grid-template-columns: 1fr;
            }

            .navbar {
                padding: 18px;
            }

            .section-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .posts-section {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>My Blog CMS</h2>
        <a href="login.php">Logout</a>
    </div>

    <main class="container">

        <section class="welcome">
            <h1>Author Dashboard</h1>
            <p>Welcome back, Author! Manage your blog posts here.</p>
        </section>

        <section class="stats">
            <div class="stat-card">
                <h3>Total Posts</h3>
                <p>12</p>
            </div>

            <div class="stat-card">
                <h3>Published Posts</h3>
                <p>8</p>
            </div>

            <div class="stat-card">
                <h3>Draft Posts</h3>
                <p>4</p>
            </div>
        </section>

        <section class="posts-section">

            <div class="section-header">
                <h2>Manage Posts</h2>
                <a href="create_post.php" class="btn btn-create">
                    + Create New Post
                </a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Post Title</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Introduction to PHP</td>
                            <td><span class="status">Published</span></td>
                            <td>
                                <div class="actions">
                                    <a href="edit_post.php?id=1"
                                       class="btn btn-edit">Edit</a>

                                    <a href="delete_post.php?id=1"
                                       class="btn btn-delete">Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Introduction to MySQL</td>
                            <td><span class="status">Published</span></td>
                            <td>
                                <div class="actions">
                                    <a href="edit_post.php?id=2"
                                       class="btn btn-edit">Edit</a>

                                    <a href="delete_post.php?id=2"
                                       class="btn btn-delete">Delete</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>

    </main>

</body>
</html>