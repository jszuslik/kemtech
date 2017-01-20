<?php
// Customizer - Add CSS --------------------------------------------------------------------------------------------
add_action( 'wp_head', 'lnx_customizer_css' );
function lnx_customizer_css() {
    ?>
<style type="text/css">
<?php if ( get_theme_mod('lnx_primary_accent_color') ) : ?>
    a,
    .tagline h3 {
        color: <?php echo get_theme_mod('lnx_primary_accent_color'); ?>;
    }
    a:hover, a:focus {
        color: <?php echo get_theme_mod('lnx_primary_accent_color'); ?>;
    }
    input[type="submit"]:hover {
        background-color: <?php echo get_theme_mod('lnx_primary_accent_color'); ?>;
    }
<?php endif; ?>

<?php if ( get_theme_mod('lnx_secondary_accent_color') ) : ?>
    .active {
        background-color: <?php echo get_theme_mod('lnx_secondary_accent_color'); ?>;
    }
<?php endif; ?>

<?php if ( get_theme_mod('lnx_header_background_color') ) : ?>

<?php endif; ?>

<?php if ( get_theme_mod('lnx_header_accent_color') ) : ?>

<?php endif; ?>

<?php if ( get_theme_mod('lnx_header_menu_color') ) : ?>
.navbar-brand h1,
.social a,
#menu-primary a,
.navbar h6 {
    color:  <?php echo get_theme_mod('lnx_header_menu_color'); ?>;
}
.header-rule {
    border-top-color: <?php echo get_theme_mod('lnx_header_menu_color'); ?>;
}
<?php endif; ?>

<?php if ( get_theme_mod('lnx_footer_background_color') ) : ?>
    footer {
        background-color: <?php echo get_theme_mod('lnx_footer_background_color'); ?>;
    }
<?php endif; ?>

<?php if ( get_theme_mod('lnx_footer_font_color') ) : ?>
    footer,
    footer a {
        color: <?php echo get_theme_mod('lnx_footer_font_color'); ?>;
    }
<?php endif; ?>

<?php if ( get_theme_mod('lnx_custom_css') ) : ?>
    <?php echo get_theme_mod('lnx_custom_css'); ?>
<?php endif; ?>
</style>
    <?php
}