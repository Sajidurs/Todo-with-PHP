<?php
include('app.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <title>To Do List Application with PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    </head>

<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form id="todo-form" method="POST" action="index.php">
            <?php if (isset($errors)){ ?>
                <p><?php echo $errors;?></p>
            <?php  } ?>
            <input type="text" name="task" placeholder="Add a task" id="task-input">
            <input type="submit" name="submit" value="Add">
        </form>
        <ul id="task-list"></ul>
    </div>

    <div class="showing_task">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No:</th>
                                <th scope="col">Tasks Remaning</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $i = 1;
                            while  ($row = mysqli_fetch_array($tasks)){ ?>
                            <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo $row['task'];?></td>
                                <td><a class="icon" href="index.php?del_task=<?php echo $row['id'];?>"><i class="bi bi-trash3"></i></a></td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom JS -->
    <script src="/assets/js/custom.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>