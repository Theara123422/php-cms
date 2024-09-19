<?php 
    include 'sidebar.php';
    $current_logo = $_GET['id'];
    
    $sql_get_logo_info = "SELECT * FROM logo WHERE id = '$current_logo'";
    $result            = $connection -> query($sql_get_logo_info);
    $row               = mysqli_fetch_assoc($result);
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Update News Logo</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-select" name="updated_status">
                                            <option value="header" <?php if($row['status'] == 'header') echo 'selected' ?>>Header</option>
                                            <option value="footer" <?php if($row['status'] == 'footer') echo 'selected' ?>>Footer</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Thumbnail</label>
                                        <input type="file" class="form-control" name="updated_image">
                                        <input type="hidden" name="old_image" value="<?php echo $row['thumbnail'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Confirm</button>
                                        <button type="submit" class="btn btn-danger">Cancel</button>
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