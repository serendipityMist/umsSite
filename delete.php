<?php
include 'db.php';

$id = $_GET["id"];
$sql = "DELETE FROM users WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: users.php");
} else {
    echo "Delete error: " . $conn->error;
}
?>
