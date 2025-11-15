<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f7f4fb;
        color: #333;
        margin: 0;
        padding: 40px;
    }

    h2 {
        text-align: center;
        color: #6F48A8;
    }

    a {
        color: #8A5FBF;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
        color: #6F48A8;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        padding: 30px;
    }

    .add-btn {
        display: inline-block;
        background-color:rgb(94, 72, 121);
        color: #fff;
        padding: 10px 16px;
        border-radius: 6px;
        font-weight: 500;
        transition: background 0.3s;
    }

    .add-btn:hover {
        background-color: #6F48A8;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background: #fcfbfe;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
    }

    th {
        background-color: #e9e1f5;
        color:rgb(13, 10, 17);
    }

    tr:nth-child(even) {
        background-color: #f4f0fa;
    }

    tr:hover {
        background-color: #ece4f7;
    }

    .action-links a {
        margin: 0 6px;
        color: #8A5FBF;
        font-weight: 500;
    }

    .action-links a:hover {
        color: #6F48A8;
    }
</style>

</head>
<body>
    <div class="container">
        <h2>User List</h2>
        <a href="add.php" class="add-btn">＋ Add New User</a>

        <table>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
            </tr>

            <?php
            $result = $conn->query("SELECT * FROM users");
            while($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= htmlspecialchars($row['name']); ?></td>
                <td><?= htmlspecialchars($row['email']); ?></td>
                <td><?= htmlspecialchars($row['phone']); ?></td>
                <td class="action-links">
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this record?');">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
