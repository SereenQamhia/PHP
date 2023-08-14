<?php
require_once 'connectdatabase.php'; // Include the database connection

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    try {
        $stmt = $con->prepare("DELETE FROM employe WHERE `emp-id` = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();

        header("Location: display.php"); // Redirect back to the display page after deletion
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>