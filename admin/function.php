<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
include './connection.php';
function register_user()
{
    global $connection;
    if (isset($_POST['btn_register'])) {
        $username = $_POST['username'];
        $gender   = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $profile = $_FILES['profile']['name'];
        if (!empty($username) && !empty($gender) && !empty($email) && !empty($password) && !empty($profile)) {
            $thumbnail = date('YmdHis') . '-' . $profile;
            $path = 'assets/image/' . $thumbnail;
            move_uploaded_file($_FILES['profile']['tmp_name'], $path);
            $password = md5($password);
            $query = "INSERT INTO `users`(`id`,`username`,`email`,`password`,`profile`,`gender`) VALUES(null,'$username','$email','$password','$thumbnail','$gender')";
            $result = $connection->query($query);
            if ($result) {
                header('location: login.php');
            }
        } else {
            echo 13;
        }
    }
}
register_user();
function login_user()
{
    global $connection;
    session_start();
    if (isset($_POST['btn_login'])) {
        $name_email = $_POST['name_email'];
        $password   = $_POST['password'];
        if (!empty($name_email)  && !empty($password)) {
            $password = md5($password);
            $sql_select = "SELECT * FROM `users` WHERE (`username` ='$name_email' OR `email` = '$name_email') AND `password` ='$password'";
            $result = $connection->query($sql_select);

            if ($result) {
                session_start();
                $row = mysqli_fetch_assoc($result);
                // echo $row['id'];
                $_SESSION['id'] = $row['id'];
                header("location: index.php");
            }
        }
    }
}
login_user();
function logout_user(){
    if(isset($_POST['btn_confirm_logout'])){
        session_start();
        session_unset();
        header('location: login.php');
    }
}
logout_user();

function move_file($file_name){
    $image = date('YmdHis') . '-' . $_FILES[$file_name]['name'];
    $path  = './assets/image/' . $image;
    move_uploaded_file($_FILES[$file_name]['tmp_name'],$path);

    return $image;
}
function add_news_logo(){
    global $connection;

    if(isset($_POST['btn_confirm_add_logo'])){
        $status    = $_POST['status'];
        $thumbnail = move_file('thumbnail'); // $thumbnail = $image

        if(!empty($status) && !empty($thumbnail)){
            $sql_insert_logo = "
                                    INSERT INTO logo (status,thumbnail) VALUES ('$status','$thumbnail');
                               ";
            $result = $connection->query($sql_insert_logo);

            if($result){
                echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Success Insert Logo",
                                text: "You Inserted Logo",
                                icon: "success",
                                button: "Confirm",
                            });
                        })
                    </script>
                ';
            }
        }
        else{
            echo '
                <script>
                    $(document).ready(function(){
                        swal({
                            title: "Failed Insert Logo",
                            text: "Invaild Information",
                            icon: "error",
                            button: "Confirm",
                        });
                    })
                </script>
            ';
        }
    }
}
add_news_logo();
