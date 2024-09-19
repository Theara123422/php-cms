<?php include('header.php'); ?>
    <div class="content contact">
        <section class="trending">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-trending">
                            <div class="content-left">
                                CONTACT US
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="wrap-follow">
                            <h4 class="title">FOLLOW US</h4>
                            <ul>
                               <?php echo get_follow_website('Header') ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="wrap-contact">
                            <h4 class="title">FEEDBACK TO US</h4>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="label">Username</div>
                                        <input type="text" class="box" placeholder="Username" name="username" >
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Email</div>
                                        <input type="email" class="box" placeholder="Email" name="email" >
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Telephone</div>
                                        <input type="tel" class="box" placeholder="Telephone" name="phone"  minlength="9" maxlength="10">
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Address</div>
                                        <input type="text" class="box" placeholder="Address" name="address" >
                                    </div>
                                    <div class="col-12">
                                        <div class="label">Message</div>
                                        <textarea cols="30" rows="10" placeholder="Message Here" name="message" ></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="wrap-btn">
                                            <button type="submit" name="btn_message"><i class="fab fa-telegram-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include('footer.php'); ?>