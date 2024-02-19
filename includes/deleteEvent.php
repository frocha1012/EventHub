<?php
require_once '../db/db.php';
$conn = mysqli_connect_mysql();

if(isset($_GET['id'])) {
    $eventId = $_GET['id'];

    // Prepare and execute delete query
    $deleteStmt = $conn->prepare("DELETE FROM tb_event WHERE id_event = ?");
    $deleteStmt->bind_param("i", $eventId);

    if($deleteStmt->execute()) {
        echo "<script>alert('Event deleted successfully');</script>";
        header("Location: ../admin.php"); // Redirect back to the admin dashboard
    } else {
        echo "<script>alert('Error: could not delete event');</script>";
    }

    $deleteStmt->close();
}

$conn->close();
?>
