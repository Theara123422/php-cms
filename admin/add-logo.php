<?php 
    include 'sidebar.php';
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Add New Logo</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-select" name="status">
                                            <option value="header">Header</option>
                                            <option value="footer">Footer</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Thumnbail : </label>
                                        <input type="file" class="form-control" name="thumbnail">
                                    </div>
                                    <div class="form-group">
                                        <button name="btn_confirm_add_logo" type="submit" class="btn btn-success">Confirm Add</button>
                                        <a href="index.php" class="btn btn-danger">Cancel</a>
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