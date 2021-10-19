<?php get_header() ?>
<div class="content-area">
    <main>
        <section class="slide">Slides</section>
        <section class="services">Serviços</section>
        <section class="middle-area">
            <aside class="sidebar">Barra Lateral</aside>
            <div class="news">
                <?php
                if (have_posts()):
                    while (have_posts()) : the_post();
                        ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <p>Published in <?php echo get_the_date(); ?>
                                <?php the_author_posts_link(); ?> </p>
                            <p>Categories: <?php the_category(''); ?></p>
                            <p><?php the_tags('Tags', ','); ?></p>
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
        </section>
        <section class="map">Mapa</section>
    </main>
</div>
<?php get_footer() ?>