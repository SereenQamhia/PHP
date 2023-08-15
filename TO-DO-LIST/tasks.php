<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>

<h1>To-Do List</h1>

<?php
$apiUrl = 'https://64db18e9593f57e435b06d7b.mockapi.io/Tasks';
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);

if ($response === false) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    $tasks = json_decode($response, true);

    if ($tasks === null) {
        echo 'JSON Error: ' . json_last_error_msg();
    } else {
        foreach ($tasks as $task) {
            echo '<p>' . $task['task'] . ' <button onclick="updateTask(\'' . $task['id'] . '\')">Update</button> <button onclick="deleteTask(\'' . $task['id'] . '\')">Delete</button></p>';
        }
    }
}

curl_close($ch);
?>

<form id="addForm">
    <label for="newTask">New Task:</label>
    <input type="text" id="newTask" name="newTask" required>
    <button type="submit">Add Task</button>
</form>

<script>
document.getElementById("addForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var newTask = document.getElementById("newTask").value;

    fetch('https://64db18e9593f57e435b06d7b.mockapi.io/Tasks', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ task: newTask })
    })
    .then(response => response.json())
    .then(data => {
        location.reload(); // Refresh the page to show updated task list
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

function updateTask(taskId) {
    var updatedTitle = prompt("Enter the updated title:");
    if (updatedTitle !== null) {
        fetch('https://64db18e9593f57e435b06d7b.mockapi.io/Tasks/' + taskId, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ task: updatedTitle })
        })
        .then(response => response.json())
        .then(data => {
            location.reload(); // Refresh the page to show updated task list
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}

function deleteTask(taskId) {
    if (confirm("Are you sure you want to delete this task?")) {
        fetch('https://64db18e9593f57e435b06d7b.mockapi.io/Tasks/' + taskId, {
            method: 'DELETE'
        })
        .then(response => {
            if (response.status === 204) {
                location.reload(); // Refresh the page to show updated task list
            } else {
                console.error('Error:', response.statusText);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}
</script>

</body>
</html>

