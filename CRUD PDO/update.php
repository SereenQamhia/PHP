<?php
require_once 'connectdatabase.php'; // Include the database connection

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    try {
        $stmt = $con->prepare("SELECT * FROM employe WHERE  `emp-id` = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];
    $newsalary = $_POST['salary'];

    try {
        $stmt = $con->prepare("UPDATE employe SET name = :newName, email = :newEmail ,salary = :newsalary WHERE `emp-id` = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':newName', $newName);
        $stmt->bindParam(':newEmail', $newEmail);
        $stmt->bindParam(':newsalary', $newsalary);
        $stmt->execute();

        header("Location: display.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Include your CSS and other headers -->
</head>
<body>
    <h2>Edit User Data</h2>
    <form method="post" action=""> 
        <label>Name: </label>
        <input type="text" name="name" ><br><br>
        <label>Email: </label>
        <input type="text" name="email" ><br><br>
        <label>Salary: </label>
        <input type="text" name="salary" ><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>