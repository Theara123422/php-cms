<?php 

    include('header.php'); 
    $current_news_id = $_GET['id'];

    $query= "SELECT * FROM `news` WHERE `id` = '$current_news_id'";

    $result = $connection -> query($query);

    $row = mysqli_fetch_assoc($result);
    $id=$row['id'];
?>
<main class="news-detail">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="main-news">
                        <div class="thumbnail">
                            <img src="../admin/assets/image/<?php echo $row['banner']  ?>">
                        </div>
                        <div class="detail">
                            <h3 class="title"><?php echo $row['title'] ?></h3>
                            <div class="date"><?php echo $row['create_at'] ?></div>
                            <div class="description">
                                <?php echo $row['description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="relate-news">
                        <h3 class="main-title">Related News</h3>
                                <?php get_related_news($row['id'],$row['category'])?>
                    </div>
                </div>
            </div>
        </div>
        <?php 
          
          get_views($id);
        
        ?>
    </section>
</main>
<?php include('footer.php'); ?>