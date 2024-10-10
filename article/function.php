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
    function show_new_by_category($category){
        global $connection;
        $sql_get_news = "SELECT * FROM tb_new WHERE `category` = '$category' ORDER BY `id` DESC LIMIT 3";
        $result = $connection -> query($sql_get_news);
        while($row = mysqli_fetch_assoc($result)){
            echo '
                <div class="col-4">
                    <figure>
                        <a href="news-detail.php?id='.$row['id'].'">
                            <div class="thumbnail">
                                <img width="350" height="200" src="../admin/assets/image/'.$row['banner'].'" alt="">
                            <div class="title">
                                '.$row['title'].'
                            </div>
                            </div>
                        </a>
                    </figure>
                </div>
            ';
        }
    }