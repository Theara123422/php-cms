<?php
    include './function.php';
    // session_start(); 
    if(!$_SESSION['id']){
        header('location: login.php');
    }
    $current_user_id = $_SESSION['id'];
    $sql_get_current_user = "SELECT * FROM users WHERE `id` = '$current_user_id'";
    $result = $connection -> query($sql_get_current_user);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- theme style -->
    <link rel="stylesheet" href="assets/style/theme.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/style/bootstrap.css">

    <!-- script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- tinyACE -->
    <script src="https://cdn.tiny.cloud/1/5gqcgv8u6c8ejg1eg27ziagpv8d8uricc4gc9rhkbasi2nc4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>
    <main class="admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="content-left">
                        <div class="wrap-top">
                            <img src="assets/icon/admin-logo.png" alt="">
                            <h5>Jong Deng News</h5>
                        </div>
                        <div class="wrap-center">
                            <img style="width: 80px; height: 80px;" src="./assets/image/<?php echo $row['profile'] ?>" alt="">
                            <h6>Welcome <?php echo $row['username'] ?></h6>
                        </div>
                        <div class="wrap-bottom">
                            <ul>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>LOGO</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="view-logo.php">View Logo</a>
                                            <a href="add-logo.php">Add New Logo</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a class="parent" href="logout.php">
                                        <span>Logout</span>
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>