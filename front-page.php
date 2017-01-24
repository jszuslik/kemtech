<?php
get_header();?>
    <div class="container-fluid">
    <?php
        get_template_part('template-parts/large', 'funnels');
        get_template_part('template-parts/small', 'funnels');
    ?>
    </div>
<?php
if (have_posts()): while (have_posts()) : the_post();
?>
    <section id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php the_content(); ?>
                    <div class="request-button">
                        <a href="#">REQUEST A MSDS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php endwhile; endif; ?>
<?php get_footer(); ?>