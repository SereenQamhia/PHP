<!doctype html>
<html lang="en">
  <head>
    <title>Employees</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body>
  <br>
  <div style="text-align: center;">
    <h2 style="display: inline-block;">Employees Dashboard</h2>
</div>
<br>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Salary</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php  include 'connectdatabase.php'; 
    $query= "SELECT * FROM employe ";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
       while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["salary"] . "</td>";
        echo "<td><button type='button' class='btn btn-success'><a style='color:white;' href='update.php?id=". $row["emp-id"]. "' >Update</a></button></td>";
        echo "<td><button type='button' class='btn btn-danger'><a style='color:white;' href='delete.php?id=" . $row["emp-id"] . "'>Delete</a></button></td>";
        echo "</tr>";

       }

    }

?>
  </tbody>
</table>
<br>
    <h3 style="display: inline-block;">Add a new employee => </h3>
    <button  type="button" class="btn btn-dark"><a style="color: white;" href="Add.php">Add</a></button>
<br>

</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>