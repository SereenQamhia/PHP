<?php 
include 'connectdatabase.php';
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $salary =$_POST['Salary'];



    $query = "UPDATE employe SET Name='$name', Email='$email', Salary='$salary' WHERE `emp-id`='$id'";
    $result = mysqli_query($conn, $query);

    $query2 = mysqli_query($conn, "SELECT * FROM employe WHERE `emp-id`='$id'");
    $userData = mysqli_fetch_array( $query2);

      if ($result){
        header("Location: display.php");
    }else{
        echo("not Updated");
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Update Employee</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h2> Update Employee Details</h2>
    <form method="post">
      <label for="Name">Name:</label>
      <input type="text" id="Name" name="Name" value="<?php echo $userData['name']?>"><br>
        
      <label for="Email">Email:</label>
      <input type="text" id="Email" name="Email" value="<?php echo $userData['email']?>"><br>
        
      <label for="Salary">Salary:</label>
      <input type="text" id="Salary" name="Salary" value="<?php echo $userData["salary"]?>"><br>
        
      <button type="submit" name="submit">Update</button>
    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>