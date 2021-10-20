<?php

/*
Template Name: Home Template
*/

?>


<?php get_header() ?>
<div class="content-area">
    <main>
        <section class="slide">
            <div class="container">
                <div class="row">Slides</div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="row">Serviços</div>
            </div>
        </section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-4">Barra Lateral</aside>
                    <div class="news col-md-8">
                        <?php
                        if (have_posts()):
                            while (have_posts()) : the_post();
                        ?>
                        <article>
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                        </article>
                        <?php
                            endwhile;
                        else:
                            ?>
                            <p>There's nothing yet to be displayed...</p>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="container">
                <div class="row">Mapa</div>
            </div>
        </section>
    </main>
</div>
<?php get_footer() ?>
