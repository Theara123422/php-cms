<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>All News</h3>
                        </div>
                        <div class="bottom view-post">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <table class="table align-middle" border="1px">
                                        <tr>
                                            <th>Title</th>
                                            <th>Author ID</th>
                                            <th>News Type</th>
                                            <th>Category</th>
                                            <th>Banner</th>
                                            <th>Thumbnail</th>
                                            <th>Description</th>
                                            <th>Publish Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        <?php
                                            $sql_get_news = "SELECT * FROM tb_new WHERE 1";
                                            $result       = $connection -> query($sql_get_news);   
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo '
                                                    <tr>
                                                        <td>'.$row['title'].'</td>
                                                        <td>'.$row['author_id'].'</td>
                                                        <td>'.$row['new_type'].'</td>
                                                        <td>'.$row['category'].'</td>
                                                        <td><img width="80px" height="80px" src="./assets/image/'.$row['banner'].'"/></td>
                                                        <td><img width="80px" height="80px" src="./assets/image/'.$row['thumbnail'].'"/></td>
                                                        <td>'.$row['description'].'</td>
                                                        <td>'.$row['created_at'].'</td>
                                                        <td width="150px">
                                                            <a href="edit_news.php?id='.$row['id'].'" class="btn btn-primary">Update</a>
                                                            <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                Remove
                                                            </button>
                                                        </td>
                                                    </tr>
                                                ';
                                            }

                                        ?>
                                    </table>
                                    <ul class="pagination">
                                        <li>
                                            <a href="">1</a>
                                            <a href="">2</a>
                                            <a href="">3</a>
                                            <a href="">4</a>
                                        </li>
                                    </ul>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this post?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="" method="post">
                                                        <input type="text" class="value_remove" name="remove_id">
                                                        <!-- value_remove = id -->
                                                        <button type="submit" class="btn btn-danger" name="btn_confirm_delete_news">Yes</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>  
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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