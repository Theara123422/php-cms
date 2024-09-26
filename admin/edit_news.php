<?php 
    include('sidebar.php');

    $updated_news_id = $_GET['id'];
    $sql_get_updated_news = "SELECT * FROM tb_new WHERE id = '$updated_news_id'";
    $result               = $connection -> query($sql_get_updated_news);
    $row                  = mysqli_fetch_assoc($result);
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Edit News</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="updated_title" value="<?php echo $row['title'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>News Type</label>
                                        <select class="form-select" name="updated_type">
                                            <option value="national" <?php if($row['new_type'] == 'national') echo 'selected' ?>>National</option>
                                            <option value="international" <?php if($row['new_type'] == 'international') echo 'selected' ?>>International</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-select" name="updated_category">
                                            <option value="social" <?php if($row['category'] == 'social') echo 'selected' ?>>Social</option>
                                            <option value="entertainment" <?php if($row['category'] == 'entertainment') echo 'selected' ?>>Entertainment</option>
                                            <option value="sport" <?php if($row['category'] == 'sport') echo 'selected' ?>>Sports</option>
                                            <option value="technology" <?php if($row['category'] == 'technology') echo 'selected' ?>>Technology</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Banner</label>
                                        <input type="file" class="form-control" name="updated_banner">
                                        <input type="text" name="old_banner" value="<?php echo $row['banner'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Thumbnail</label>
                                        <input type="file" class="form-control" name="updated_thumbnail">
                                        <input type="text" name="old_thumbnail" value="<?php echo $row['thumbnail'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="updated_description"><?php echo $row['description'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button name="btn_confirm_edit_news" type="submit" class="btn btn-success">Confirm Edit</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                                </form>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>