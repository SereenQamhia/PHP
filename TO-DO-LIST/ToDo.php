<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List Project</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="To-Do.css">
</head>
<body style="background-color: pink;" >
    <div class="toDo">
        <form method="POST" action="addTask.php">
            <div>
                <h1>To-Do List</h1>

                <label for="addTask"></label>
                <input type="text" name="addTask" id="addTask" placeholder="Enter task description">
                <button class="btn">Add</button><br><br>
            </div>
        </form>
    
        <?php
        //CURL -> Client URL

        ///////////////////////////////GET 

        $ch = curl_init(); // Initializes a cURL session and returns a cURL handle
        $url = "https://64bbae6d7b33a35a444692b6.mockapi.io/tasks"; // The URL of the API endpoint
        
        curl_setopt($ch, CURLOPT_URL, $url); // Set the URL for the cURL request
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set to true to return the transfer as a string
        
        $resp = curl_exec($ch); // Execute the cURL session and store the response in $resp

        //Check Errors
        if($e = curl_error($ch)){
            echo $e;
        }else{
            $decoded = json_decode($resp, true);
            
            foreach ($decoded as $task) {
            echo '<p>' . $task['taskName'] . '<button id = "btnn1"><a href="?update=' . $task['id'] . '">Update</a></button><button id = "btnn2"><a href="?delete=' . $task['id'] . '">Delete</a></button></p>';
                    echo '<hr>';
                }
            }

            // Handle delete
            if (isset($_GET['delete'])) {
                $deleteId = $_GET['delete'];
                deleteTask($deleteId);
                header('Location: ' . $_SERVER['PHP_SELF']); // Stay on the same pageheader('Location: index.php'); // Redirect to refresh the page
            }

            function deleteTask($taskId) {
                $ch = curl_init();
                $url = "https://64bbae6d7b33a35a444692b6.mockapi.io/tasks/$taskId";

                curl_setopt($ch, CURLOPT_URL, $url); // Set the URL for the cURL request
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE'); // Set the HTTP request method to DELETE
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set to true to return the transfer as a string
                
                $resp = curl_exec($ch); // Execute the cURL session and store the response in $resp
                

                // Close Connection
                curl_close($ch);
            }

            // Handle update
            if (isset($_GET['update'])) {
                $updateId = $_GET['update'];
                $updatedValue = isset($_POST['updatedValue']) ? $_POST['updatedValue'] : '';
                if (!empty($updatedValue)) {
                    updateTask($updateId, $updatedValue);
                    header('Location: ' . $_SERVER['PHP_SELF']); // Stay on the same page
                } else {
                    echo '<center><form method="POST"><input type="text" name="updatedValue" placeholder="Enter updated value"><button type="submit">Update</button></form></center>';
                }
            }

            function updateTask($taskId, $updatedValue) {
                $ch = curl_init();
                $url = "https://64bbae6d7b33a35a444692b6.mockapi.io/tasks/$taskId";

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['taskName' => $updatedValue]));

                $resp = curl_exec($ch);

                // Close Connection
                curl_close($ch);
            }

            // Close Connection
            curl_close($ch);
            ?>
    </div>   
</body>
</html>

