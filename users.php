<?php
include 'db.php';

// Fetch all users from the database
$sql = "SELECT * FROM users ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Users</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #1a1a2e;
      color: #eee;
    }
    .btn-purple {
      background-color: #c77dff;
      color: #000;
      border: none;
    }
    .btn-purple:hover {
      background-color: #e0aaff;
    }
    .table-dark th {
      background-color: #3a0ca3 !important;
    }
    .table td, .table th {
      vertical-align: middle;
    }
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="container py-5">
    <h2 class="mb-4">👥 Users</h2>
    <a href="add.php" class="btn btn-purple mb-3">➕ Add New User</a>

    <div class="table-responsive">
      <table class="table table-bordered table-striped text-light">
        <thead class="table-dark">
          <tr>
           <th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Created At</th><th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
              <tr>
                <!-- <td><?= $row['id'] ?></td> -->
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['address'] ?></td>
                <td><?= $row['created_at'] ?></td>
                <td>
                  <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-purple">Edit</a>
                  <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this user?');">Delete</a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <tr><td colspan="7">No users found.</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
