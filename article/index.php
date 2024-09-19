<?php include('header.php'); ?>
<main class="home">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            TRENDING NOW
                        </div>   
                        <div class="content-right">
                            <marquee behavior="" direction="left">
                                <div class="text-news">
                                    <i class="fas fa-angle-double-right"></i>
                                    <a href="">ពិធីសម្ពោធដាក់ឱ្យប្រើប្រាស់នូវកំណាត់ផ្លូវជាតិលេខ២៦ ប្រវែងជិត ៦៤គីឡូម៉ែត្រ </a> &ensp;
                                    <i class="fas fa-angle-double-right"></i>
                                    <a href="">ពិធីសម្ពោធដាក់ឱ្យប្រើប្រាស់នូវកំណាត់ផ្លូវជាតិលេខ២៦ ប្រវែងជិត ៦៤គីឡូម៉ែត្រ </a>
                                </div>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-8 content-left">
                    <?php top_trending_nesw();?>
                </div>
                <div class="col-4 content-right">
                    <?php get_trend_news();?>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SPORT NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <?php get_news_post('sport'); ?>
            </div>
        </div>
    </section>

    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            SOCIAL NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="news">
        <div class="container">
            <div class="row">
                <?php get_news_post('social') ?>
            </div>
        </div>
    </section>
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            ENTERTAINMENT NEWS
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="news">
        <div class="container">
            <div class="row">
                <?php get_news_post('entertainment') ?>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>