<?php
if ( function_exists('lnx_require_file') ) {

    // Load Classes
    lnx_require_file( LNX_CORE_CLASSES . 'class-tgm-plugin-activation.php' );
    lnx_require_file( LNX_CORE_CLASSES . 'wp_bootstrap_navwalker.php' );
    // lnx_require_file( LNX_CORE_CLASSES . 'like-post/nrw-like-post.php' );

    // Load Functions
    lnx_require_file( LNX_CORE_FUNCTIONS . 'customizer/nrw-custom-control.php' );
    lnx_require_file( LNX_CORE_FUNCTIONS . 'customizer/nrw-customizer-settings.php' );
    lnx_require_file( LNX_CORE_FUNCTIONS . 'customizer/nrw-customizer-style.php' );
    lnx_require_file( LNX_CORE_FUNCTIONS . 'nrw-resize-image.php' );

    // Load Widgets
    lnx_require_file( LNX_CORE_WIDGETS . 'nrw-about-widget.php' );
    lnx_require_file( LNX_CORE_WIDGETS . 'nrw-latest-posts-widget.php' );
    lnx_require_file( LNX_CORE_WIDGETS . 'nrw-categories-images.php' );

}