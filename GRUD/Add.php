<?php 
include 'connectdatabase.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['Name']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $salary = mysqli_real_escape_string($conn, $_POST['Salary']);

    $query = "INSERT INTO `employe` (name, email, salary) VALUES ('$name', '$email', '$salary')";
    $result = mysqli_query($conn, $query);

    if ($result){
        header("Location: display.php");
    }else{
        echo("not Updated");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new employee</title>
</head>
<body>
    <h1>Add New Employee</h1>
    <form style="font-size: 25px;" method="post">
        <label for="Name">Name:</label>
        <input style="height:28px" type="text" id="Name" name="Name"><br><br>
        
        <label for="Email">Email:</label>
        <input style="height:28px" type="text" id="Email" name="Email"><br><br>
        
        <label for="Salary">Salary:</label>
        <input  style="height:28px" type="text" id="Salary" name="Salary"><br><br>
        
        <input  type="submit" value="Submit" name="submit">
        
    </form>
</body>
</html>
