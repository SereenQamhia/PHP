<?php 

 include 'connectdatabase.php';
 if (isset($_GET['id'])){
 $id = $_GET['id'];

 $query = "DELETE FROM `employe` WHERE `emp-id`=$id";
 $result = mysqli_query($conn, $query);
 if ($result){
    header("Location: display.php");
}else{
    echo("not deleted");
}
 }

?>