<?php
require_once 'connectdatabase.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];
    $newSalary = $_POST['salary'];

    try {
        $stmt = $con->prepare("INSERT INTO employe (name, email, salary) VALUES (:newName, :newEmail, :newSalary)");
        $stmt->bindParam(':newName', $newName);
        $stmt->bindParam(':newEmail', $newEmail);
        $stmt->bindParam(':newSalary', $newSalary);
        $stmt->execute();

        header("Location: display.php"); // Redirect back to the display page after adding
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<html>
<head>
    <!-- Include your CSS and other headers -->
</head>
<body>
    <h2>Add New Employee</h2>
    <form method="post" action=""> <!-- This is where you'll process the form submission -->
        <label>Name: </label>
        <input type="text" name="name"><br><br>
        <label>Email: </label>
        <input type="email" name="email"><br><br>
        <label>Salary: </label>
        <input type="text" name="salary"><br><br>

        <button type="submit">Add Employee</button>
    </form>
</body>
</html>