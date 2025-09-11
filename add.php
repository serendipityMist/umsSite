<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "INSERT INTO users (name, email, phone, address)
            VALUES ('$name', '$email', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
        header("Location: users.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #1a1a2e;
      color: #eee;
    }
    .form-container {
      background-color: #2a2540;
      border-radius: 10px;
      padding: 30px;
    }
    .btn-purple {
      background-color: #c77dff;
      color: #000;
      border: none;
    }
    .btn-purple:hover {
      background-color: #e0aaff;
    }
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="container py-5">
    <h2 class="mb-4">➕ Add New User</h2>
    <form method="POST" class="form-container shadow">
      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control">
      </div>
      <div class="mb-3">
        <label>Address</label>
        <textarea name="address" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-purple">Add User</button>
      <a href="users.php" class="btn btn-secondary">← Back</a>
    </form>
  </div>
</body>
</html>
