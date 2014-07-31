</div>

    <div id="gray">
        <div class="container">
            <div id="products" class="clearfix page-blog">

                <h2 class="page-title">
                    <span class="first">N</span>aše <strong>produkty</strong>
                    <div class="pull-right">
                        <span id="doLeft"> <span class="glyphicon glyphicon-chevron-left"></span> </span>
                        <span id="doRight"> <span class="glyphicon glyphicon-chevron-right"></span> </span>
                    </div>
                </h2>

                <div id="sliderp">
                    <?php get_template_part('/template/produkty', 'loop') ?>
                </div>
            </div>

            <div id="portfolio" class="clearfix page-blog">
                <h2 class="page-title"><span class="first">V</span>ybrané <strong>reference</strong></h2>
                <?php get_template_part('/template/references', 'loop') ?>
            </div>
        </div>
    </div>

    <div class="container">

        <div id="news-container" class="clearfix page-blog">
            <h2 class="page-title"><span class="first">N</span>ews / <strong>Aktuality</strong></h2>
            <?php get_template_part('/template/news', 'loop') ?>
        </div>

    </div>