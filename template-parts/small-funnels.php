<?php
$small_funnel_1_title = get_theme_mod('lnx_small_funnel_1');
$small_funnel_1_link = get_theme_mod('lnx_small_funnel_1_url');
$small_funnel_1_link = get_permalink($small_funnel_1_link);
$small_funnel_1_img_url = get_theme_mod('lnx_small_funnel_1_img');

$small_funnel_2_title = get_theme_mod('lnx_small_funnel_2');
$small_funnel_2_link = get_theme_mod('lnx_small_funnel_2_url');
$small_funnel_2_link = get_permalink($small_funnel_2_link);
$small_funnel_2_img_url = get_theme_mod('lnx_small_funnel_2_img');

$small_funnel_3_title = get_theme_mod('lnx_small_funnel_3');
$small_funnel_3_link = get_theme_mod('lnx_small_funnel_3_url');
$small_funnel_3_link = get_permalink($small_funnel_3_link);
$small_funnel_3_img_url = get_theme_mod('lnx_small_funnel_3_img');

$small_funnel_4_title = get_theme_mod('lnx_small_funnel_4');
$small_funnel_4_link = get_theme_mod('lnx_small_funnel_4_url');
$small_funnel_4_link = get_permalink($small_funnel_4_link);
$small_funnel_4_img_url = get_theme_mod('lnx_small_funnel_4_img');
?>
<section id="small-funnels">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 funnel funnel-odd">
            <a href="<?php echo $small_funnel_1_link; ?>">
                <div class="sml-funnel-outer">
                    <img src="<?php echo $small_funnel_1_img_url; ?>" alt="" >
                    <div class="overlay">
                        <div class="sml-funnel-inner">
                            <h4><span><?php echo $small_funnel_1_title; ?></span></h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 funnel funnel-even">
            <a href="<?php echo $small_funnel_2_link; ?>">
                <div class="sml-funnel-outer">
                    <img src="<?php echo $small_funnel_2_img_url; ?>" alt="" >
                    <div class="overlay">
                        <div class="sml-funnel-inner">
                            <h4><span><?php echo $small_funnel_2_title; ?></span></h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 funnel funnel-odd">
            <a href="<?php echo $small_funnel_3_link; ?>">
                <div class="sml-funnel-outer">
                    <img src="<?php echo $small_funnel_3_img_url; ?>" alt="" >
                    <div class="overlay">
                        <div class="sml-funnel-inner">
                            <h4><span><?php echo $small_funnel_3_title; ?></span></h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 funnel funnel-even">
            <a href="<?php echo $small_funnel_4_link; ?>">
                <div class="sml-funnel-outer">
                    <img src="<?php echo $small_funnel_4_img_url; ?>" alt="" >
                    <div class="overlay">
                        <div class="sml-funnel-inner">
                            <h4><span><?php echo $small_funnel_4_title; ?></span></h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
