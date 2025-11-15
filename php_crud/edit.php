<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f4fb;
            color: #333;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color:rgb(26, 18, 37);
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 6px;
            color:rgb(23, 15, 34);
        }

        input[type="text"],
        input[type="email"] {
            width: 95%;
            padding: 12px;
            border: 1px solid #c9b7e8;
            border-radius: 6px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            outline: none;
            border-color: #8A5FBF;
            box-shadow: 0 0 4px rgba(138,95,191,0.4);
        }

        .btn-update {
            width: 100%;
            background-color: #8A5FBF;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-update:hover {
            background-color: #6F48A8;
        }

        .back-link {
            display: block;
            margin-top: 15px;
            color: #8A5FBF;
            text-decoration: none;
            font-weight: 500;
            text-align: center;
        }

        .back-link:hover {
            color: #6F48A8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit User</h2>

        <form method="POST">
            <label>Name</label>
            <input type="text" name="name" value="<?= $row['name']; ?>" required>

            <label>Email</label>
            <input type="email" name="email" value="<?= $row['email']; ?>" required>

            <label>Phone</label>
            <input type="text" name="phone" value="<?= $row['phone']; ?>" required>

            <input type="submit" name="update" value="Update" class="btn-update">
        </form>

        <a href="index.php" class="back-link">← Back to User List</a>
    </div>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
