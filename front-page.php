<?php
get_header();
if ( get_theme_mod('lnx_featured_slider') ) {
    get_template_part('template-parts/featured', 'slider');
}

if ( get_theme_mod('lnx_promobox_show') ) {
    get_template_part('template-parts/funnel', 'boxes');
}

$lnx_blog_config = lnx_blog_config();
?>
    <div class="row">
        <div class="col-md-<?php echo esc_attr( $lnx_blog_config['column'] ); ?> col-sm-<?php echo esc_attr( $lnx_blog_config['column_sm'] ); ?>">
            <?php
            if ( $lnx_blog_config['layout'] == '2col_grid' ) {
                get_template_part('loop', '2col-grid');
            } elseif ( $lnx_blog_config['layout'] == '3col_grid' ) {
                get_template_part('loop', '3col-grid');
            } else {
                get_template_part('loop', 'standard');
            }
            ?>
        </div>
        <?php if ( !$lnx_blog_config['disable_sidebar'] ) : ?>
            <div class="col-md-3 col-sm-4 sidebar"><?php get_sidebar(); ?></div>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>