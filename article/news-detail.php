<?php 
    include('header.php'); 
    $current_news_id     = $_GET['id'];
    $sql_get_detail_news = "SELECT * FROM tb_new WHERE `id` = '$current_news_id'";
    $result              = $connection -> query($sql_get_detail_news);
    $row                 = mysqli_fetch_assoc($result);
?>
<main class="news-detail">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="main-news">
                        <div class="thumbnail">
                            <img src="../admin/assets/image/<?php echo $row['thumbnail'] ?>">
                        </div>
                        <div class="detail">
                            <h3 class="title"><?php echo $row['title'] ?></h3>
                            <div class="date"><?php echo $row['created_at'] ?></div>
                            <div class="description">
                                <?php echo $row['description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="relate-news">
                        <h3 class="main-title">Related News</h3>
                        <?php get_related_news($current_news_id,$row['category']) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php update_view($current_news_id); ?>
</main>
<?php include('footer.php'); ?>