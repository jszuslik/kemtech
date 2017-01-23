<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
    <div class="topbar">
        <div class="container">
            <div class="social pull-right">
                <?php if(get_theme_mod('lnx_company_info_phone')) : ?>
                    <?php
                        $ph_number_unsan = get_theme_mod('lnx_company_info_phone');
                        $ph_number_print = preg_replace('#\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})#', '\1.\2.\3', $ph_number_unsan);
                        $ph_number_link = preg_replace('#\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})#', '\1\2\3', $ph_number_unsan);
                    ?>
                    <a href="tel:+1<?php echo $ph_number_link; ?>" target="_blank"><span><?php echo $ph_number_print; ?></span></a>
                <?php endif; ?>
                <?php if(get_theme_mod('lnx_linkedin')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_linkedin') ); ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_youtube')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_youtube') ); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_facebook')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_facebook') ); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_twitter')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_twitter') ); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_instagram')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_instagram') ); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_pinterest')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_pinterest') ); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_bloglovin')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_bloglovin') ); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_google')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_google') ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_tumblr')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_tumblr') ); ?>" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_dribbble')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_dribbble') ); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_soundcloud')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_soundcloud') ); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?>
                <?php if(get_theme_mod('lnx_vimeo')) : ?><a href="<?php echo esc_url( get_theme_mod('lnx_vimeo') ); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-defualt">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
                if(get_theme_mod('lnx_company_info_name_1')) {
                    $name_1 = get_theme_mod('lnx_company_info_name_1');
                }
                if(get_theme_mod('lnx_company_info_name_2')) {
                    $name_2 = get_theme_mod('lnx_company_info_name_2');
                }
                if(get_theme_mod('lnx_company_info_name_3')) {
                    $name_3 = get_theme_mod('lnx_company_info_name_3');
                }
            ?>
            <a class="navbar-brand" href="/"><h1><?php if(get_theme_mod('lnx_company_info_name_1')) { echo get_theme_mod('lnx_company_info_name_1'); } ?><?php if(get_theme_mod('lnx_company_info_name_2')) { echo '<br><span>' . get_theme_mod('lnx_company_info_name_2') . '</span>'; } ?></h1></a>
        </div>
        <?php
        wp_nav_menu( array (
                'menu' => 'primary',
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'navbar-collapse collapse navbar-responsive-collapse',
                'container_id' => 'mobile-collapse',
                'menu_class' => 'nav navbar-nav navbar-right',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker())
        );
        ?>
    </div>
    <div class="container-fluid header-rule-wrapper-outer">
        <div class="container header-rule-wrapper-inner">
            <hr class="header-rule" />
            <?php if(get_theme_mod('lnx_company_info_name_3')) { echo '<h6>' . get_theme_mod('lnx_company_info_name_3') . '</h6>'; } ?>
            <?php if(get_bloginfo('description')) { echo '<div class="tagline pull-right"><h3>'. get_bloginfo( 'description' ) . '</h3></div>'; } ?>
        </div>
    </div>
</div>
