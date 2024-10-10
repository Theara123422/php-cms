<!-- @import jquery & sweet alert  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
// @Connection database
// $con = new mysqli('','root','','');
    include '../admin/connection.php';
    function show_logo($location){
        global $connection;
        $sql_get_logo = "SELECT * FROM logo WHERE `status` = '$location' ORDER BY `id` DESC LIMIT 1";
        $result       = $connection -> query($sql_get_logo);
        $row          = mysqli_fetch_assoc($result);    
        return $row['thumbnail'];
    }