<?php
// Finding Error
$errors = "";
// Connecting to the database
$dbconnect = mysqli_connect('localhost', 'root', '', 'todo');

if(isset($_POST['submit'])){
    $task = $_POST['task'];
    if(empty($task)){
        $errors = "Please enter anything";
    } else{
        mysqli_query($dbconnect, "INSERT INTO tasks (task) VALUES ('$task')");
        header('location: index.php');
    }
}

    if(isset($_GET['del_task'])){
        $id = $_GET['del_task'];

    mysqli_query($dbconnect, "DELETE FROM tasks WHERE id=$id");
    header('Location: index.php');
    }

$tasks = mysqli_query($dbconnect, "SELECT * FROM tasks");

?>

