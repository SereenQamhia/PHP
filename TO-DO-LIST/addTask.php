<?php

$addTask = $_POST['addTask'];

$url = "https://64bbae6d7b33a35a444692b6.mockapi.io/tasks";
$newTask = array(
    'taskName' => $addTask
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($newTask));

$response1 = curl_exec($ch);
curl_close($ch);

 
header('Location: ToDo.php ');

?>