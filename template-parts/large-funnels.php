<?php
$left_funnel_title = get_theme_mod('lnx_large_funnel_1');
$left_funnel_link = get_theme_mod('lnx_large_funnel_1_url');
$left_funnel_img_url = get_theme_mod('lnx_large_funnel_1_img');

$right_funnel_title = get_theme_mod('lnx_large_funnel_2');
$right_funnel_link = get_theme_mod('lnx_large_funnel_2_url');
$right_funnel_img_url = get_theme_mod('lnx_large_funnel_2_img');
?>
<section id="funnels">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 funnel">
            <a href="<?php echo $left_funnel_link; ?>">
                <div class="lrg-funnel-outer">
                    <img src="<?php echo $left_funnel_img_url; ?>" alt="" >
                    <div class="lrg-funnel-inner">
                        <h3><span><?php echo $left_funnel_title; ?></span></h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 funnel">
            <a href="<?php echo $right_funnel_link; ?>">
                <div class="lrg-funnel-outer">
                    <img src="<?php echo $right_funnel_img_url; ?>" alt="" >
                    <div class="lrg-funnel-inner">
                        <h3><span><?php echo $right_funnel_title; ?></span></h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
