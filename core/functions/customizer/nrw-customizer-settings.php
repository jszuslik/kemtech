<?php
function lnx_sanitize_default( $value ) {
    return $value;
}

/** nrw - Customizer - Add Settings */
function lnx_register_theme_customizer( $wp_customize )
{
    /** Add Sections -----------------------------------------------------------------------------------------------------------*/
    $wp_customize->add_section( 'lnx_new_section_header', array(
        'title' => 'Logo upload',
        'description' => null,
        'priority' => 1
    ) );
    $wp_customize->add_section( 'lnx_new_section_frontpage_layout', array(
        'title' => 'Front Page Settings',
        'description' => null,
        'priority' => 2
    ) );
    $wp_customize->add_section( 'lnx_new_section_company_info', array(
        'title' => 'Company Contact Information',
        'description' => null,
        'priority' => 5
    ));
    $wp_customize->add_section( 'lnx_new_section_social_media', array(
        'title' => 'Social Media Settings',
        'description' => 'Enter your social media URL. Icons will not show if left blank.',
        'priority' => 6
    ) );
    $wp_customize->add_section( 'lnx_new_section_footer', array(
        'title' => 'Footer Settings',
        'description'  => '',
        'priority' => 7
    ) );
    $wp_customize->add_section( 'lnx_new_section_color_accent', array(
        'title'        => 'Colors',
        'description'  => ''
    ) );
    $wp_customize->add_section( 'lnx_new_section_custom_css', array(
        'title'        => 'Custom CSS',
        'description'  => 'Add your custom CSS which will overwrite the theme CSS'
    ) );

    /** Add Settings ------------------------------------------------------------------------------------------------------------*/

    /** Blog layout settings */
    $wp_customize->add_setting( 'lnx_large_funnel_1', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_large_funnel_1_url', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_large_funnel_1_img', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_large_funnel_2', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_large_funnel_2_url', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_large_funnel_2_img', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_1', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_1_url', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_1_img', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_2', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_2_url', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_2_img', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_3', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_3_url', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_3_img', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_4', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_4_url', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_small_funnel_4_img', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );

    // Company Info
    $wp_customize->add_setting( 'lnx_company_info_name_1', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_name_2', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_name_3', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_address_1', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_address_2', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_city', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_state', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_zip', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_latitude', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_longitude', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_phone', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );
    $wp_customize->add_setting( 'lnx_company_info_email', array(
        'default' => '',
        'sanatize_callback' => 'lnx_sanatize_default'
    ) );

    // Featured area
    $wp_customize->add_setting( 'lnx_featured_slider', array(
        'default' => false,
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_featured_cat', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_featured_id', array(
        'default' => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_featured_slider_slides', array(
        'default' => '5',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    // Header and Logo
    $wp_customize->add_setting( 'lnx_logo', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_logo_footer', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    // Social media settings
    $wp_customize->add_setting( 'lnx_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_pinterest', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_tumblr', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_bloglovin', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_tumblr', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_google', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_dribbble', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_soundcloud', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_vimeo', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    // Colors
    $wp_customize->add_setting( 'lnx_primary_accent_color', array(
        'default'           => '#939598',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_secondary_accent_color', array(
        'default'           => '#eee',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_primary_content_color', array(
        'default'           => '#727272',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_header_background_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_header_accent_color', array(
        'default'           => '#002d56',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_header_menu_color', array(
        'default'           => '#07074e',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_footer_background_color', array(
        'default'           => '#002d56',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_footer_font_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    // Footer
    $wp_customize->add_setting( 'lnx_footer_copyright', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_footer_logo_1', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    $wp_customize->add_setting( 'lnx_footer_logo_2', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );
    // Custom CSS
    $wp_customize->add_setting( 'lnx_custom_css', array(
        'default'           => '',
        'sanitize_callback' => 'lnx_sanitize_default'
    ) );

    /** Add Constrol ------------------------------------------------------------------------------------------------------------*/
    // Logo
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'upload_logo',
            array(
                'label'      => 'Upload logo top',
                'section'    => 'lnx_new_section_header',
                'settings'   => 'lnx_logo',
                'priority'	 => 1
            )
        )
    );


    // Company Info
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_name_1',
            array(
                'label' => 'Company Name',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_name_1',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_name_2',
            array(
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_name_2',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_name',
            array(
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_name_3',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_address_1',
            array(
                'label' => 'Address',
                'description' => 'Address 1',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_address_1',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_address_2',
            array(
                'description' => 'Address 2',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_address_2',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_city',
            array(
                'description' => 'City',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_city',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_state',
            array(
                'description' => 'State',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_state',
                'type' => 'select',
                'choices' => array(
                    'AL'=>'ALABAMA',
                    'AK'=>'ALASKA',
                    'AS'=>'AMERICAN SAMOA',
                    'AZ'=>'ARIZONA',
                    'AR'=>'ARKANSAS',
                    'CA'=>'CALIFORNIA',
                    'CO'=>'COLORADO',
                    'CT'=>'CONNECTICUT',
                    'DE'=>'DELAWARE',
                    'DC'=>'DISTRICT OF COLUMBIA',
                    'FM'=>'FEDERATED STATES OF MICRONESIA',
                    'FL'=>'FLORIDA',
                    'GA'=>'GEORGIA',
                    'GU'=>'GUAM GU',
                    'HI'=>'HAWAII',
                    'ID'=>'IDAHO',
                    'IL'=>'ILLINOIS',
                    'IN'=>'INDIANA',
                    'IA'=>'IOWA',
                    'KS'=>'KANSAS',
                    'KY'=>'KENTUCKY',
                    'LA'=>'LOUISIANA',
                    'ME'=>'MAINE',
                    'MH'=>'MARSHALL ISLANDS',
                    'MD'=>'MARYLAND',
                    'MA'=>'MASSACHUSETTS',
                    'MI'=>'MICHIGAN',
                    'MN'=>'MINNESOTA',
                    'MS'=>'MISSISSIPPI',
                    'MO'=>'MISSOURI',
                    'MT'=>'MONTANA',
                    'NE'=>'NEBRASKA',
                    'NV'=>'NEVADA',
                    'NH'=>'NEW HAMPSHIRE',
                    'NJ'=>'NEW JERSEY',
                    'NM'=>'NEW MEXICO',
                    'NY'=>'NEW YORK',
                    'NC'=>'NORTH CAROLINA',
                    'ND'=>'NORTH DAKOTA',
                    'MP'=>'NORTHERN MARIANA ISLANDS',
                    'OH'=>'OHIO',
                    'OK'=>'OKLAHOMA',
                    'OR'=>'OREGON',
                    'PW'=>'PALAU',
                    'PA'=>'PENNSYLVANIA',
                    'PR'=>'PUERTO RICO',
                    'RI'=>'RHODE ISLAND',
                    'SC'=>'SOUTH CAROLINA',
                    'SD'=>'SOUTH DAKOTA',
                    'TN'=>'TENNESSEE',
                    'TX'=>'TEXAS',
                    'UT'=>'UTAH',
                    'VT'=>'VERMONT',
                    'VI'=>'VIRGIN ISLANDS',
                    'VA'=>'VIRGINIA',
                    'WA'=>'WASHINGTON',
                    'WV'=>'WEST VIRGINIA',
                    'WI'=>'WISCONSIN',
                    'WY'=>'WYOMING',
                    'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
                    'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
                    'AP'=>'ARMED FORCES PACIFIC'
                )
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_zip',
            array(
                'description' => 'Zip Code',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_zip',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_latitude',
            array(
                'description' => 'Latitude',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_latitude',
                'type' => 'text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_longitude',
            array(
                'description' => 'Longitude',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_longitude',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_phone',
            array(
                'label' => 'Phone Number',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_phone',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_company_info_email',
            array(
                'label' => 'E-mail Address',
                'section' => 'lnx_new_section_company_info',
                'settings' => 'lnx_company_info_email',
                'type' => 'text'
            )
        )
    );

    // Frontpage layout
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_frontpage_lrg_funnel_1_title',
            array(
                'label'      => 'Large Funnel 1 Title',
                'section'    => 'lnx_new_section_frontpage_layout',
                'settings'   => 'lnx_large_funnel_1',
                'type'		 => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Pages_Control(
            $wp_customize,
            'lnx_frontpage_lrg_funnel_1_url',
            array(
                'label'    => 'Large Funnel 1 Link',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_large_funnel_1_url',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'lnx_frontpage_lrg_funnel_1_img',
            array(
                'label'    => 'Large Funnel 1 Image',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_large_funnel_1_img',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_frontpage_lrg_funnel_2_title',
            array(
                'label'      => 'Large Funnel 2 Title',
                'section'    => 'lnx_new_section_frontpage_layout',
                'settings'   => 'lnx_large_funnel_2',
                'type'		 => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Pages_Control(
            $wp_customize,
            'lnx_frontpage_lrg_funnel_2_url',
            array(
                'label'    => 'Large Funnel 2 Link',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_large_funnel_2_url',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'lnx_frontpage_lrg_funnel_2_img',
            array(
                'label'    => 'Large Funnel 2 Image',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_large_funnel_2_img',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_1_title',
            array(
                'label'      => 'Small Funnel 1 Title',
                'section'    => 'lnx_new_section_frontpage_layout',
                'settings'   => 'lnx_small_funnel_1',
                'type'		 => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Pages_Control(
            $wp_customize,
            'lnx_frontpage_small_funnel_1_url',
            array(
                'label'    => 'Small Funnel 1 Link',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_small_funnel_1_url',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_1_img',
            array(
                'label'    => 'Small Funnel 1 Image',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_small_funnel_1_img',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_2_title',
            array(
                'label'      => 'Small Funnel 2 Title',
                'section'    => 'lnx_new_section_frontpage_layout',
                'settings'   => 'lnx_small_funnel_2',
                'type'		 => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Pages_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_2_url',
            array(
                'label'    => 'Small Funnel 2 Link',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_small_funnel_2_url',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_2_img',
            array(
                'label'    => 'Small Funnel 2 Image',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_small_funnel_2_img',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_3_title',
            array(
                'label'      => 'Small Funnel 3 Title',
                'section'    => 'lnx_new_section_frontpage_layout',
                'settings'   => 'lnx_small_funnel_3',
                'type'		 => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Pages_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_3_url',
            array(
                'label'    => 'Small Funnel 3 Link',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_small_funnel_3_url',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_3_img',
            array(
                'label'    => 'Small Funnel 3 Image',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_small_funnel_3_img',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_4_title',
            array(
                'label'      => 'Small Funnel 4 Title',
                'section'    => 'lnx_new_section_frontpage_layout',
                'settings'   => 'lnx_small_funnel_4',
                'type'		 => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Pages_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_4_url',
            array(
                'label'    => 'Small Funnel 4 Link',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_small_funnel_4_url',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'lnx_frontpage_sml_funnel_4_img',
            array(
                'label'    => 'Small Funnel 4 Image',
                'section'  => 'lnx_new_section_frontpage_layout',
                'settings' => 'lnx_small_funnel_4_img',
            )
        )
    );

    // Social Media
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'facebook',
            array(
                'label'      => 'Facebook',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_facebook',
                'type'		 => 'text',
                'priority'	 => 1
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'twitter',
            array(
                'label'      => 'Twitter',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_twitter',
                'type'		 => 'text',
                'priority'	 => 2
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'instagram',
            array(
                'label'      => 'Instagram',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_instagram',
                'type'		 => 'text',
                'priority'	 => 3
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'pinterest',
            array(
                'label'      => 'Pinterest',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_pinterest',
                'type'		 => 'text',
                'priority'	 => 4
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'bloglovin',
            array(
                'label'      => 'Bloglovin',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_bloglovin',
                'type'		 => 'text',
                'priority'	 => 5
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'google',
            array(
                'label'      => 'Google Plus',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_google',
                'type'		 => 'text',
                'priority'	 => 6
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'tumblr',
            array(
                'label'      => 'Tumblr',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_tumblr',
                'type'		 => 'text',
                'priority'	 => 7
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'youtube',
            array(
                'label'      => 'Youtube',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_youtube',
                'type'		 => 'text',
                'priority'	 => 8
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'dribbble',
            array(
                'label'      => 'Dribbble',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_dribbble',
                'type'		 => 'text',
                'priority'	 => 9
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'soundcloud',
            array(
                'label'      => 'Soundcloud',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_soundcloud',
                'type'		 => 'text',
                'priority'	 => 10
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'vimeo',
            array(
                'label'      => 'Vimeo',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_vimeo',
                'type'		 => 'text',
                'priority'	 => 11
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'linkedin',
            array(
                'label'      => 'Linkedin (Use full URL to your Linkedin profile)',
                'section'    => 'lnx_new_section_social_media',
                'settings'   => 'lnx_linkedin',
                'type'		 => 'text',
                'priority'	 => 12
            )
        )
    );
    // Colors
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_accent_color',
            array(
                'label'      => 'Primary Accent Color Color',
                'section'    => 'lnx_new_section_color_accent',
                'settings'   => 'lnx_primary_accent_color',
                'priority'	 => 1
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'secondary_accent_color',
            array(
                'label'      => 'Secondary Accent Color Color',
                'section'    => 'lnx_new_section_color_accent',
                'settings'   => 'lnx_secondary_accent_color',
                'priority'	 => 2
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_content_color',
            array(
                'label'      => 'Primary Content Color',
                'section'    => 'lnx_new_section_color_accent',
                'settings'   => 'lnx_primary_content_color',
                'priority'	 => 3
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_background_color',
            array(
                'label'      => 'Header Background Color',
                'section'    => 'lnx_new_section_color_accent',
                'settings'   => 'lnx_header_background_color',
                'priority'	 => 4
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_accent_color',
            array(
                'label'      => 'Header Accent Color',
                'section'    => 'lnx_new_section_color_accent',
                'settings'   => 'lnx_header_accent_color',
                'priority'	 => 5
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_menu_color',
            array(
                'label'      => 'Header Menu Color',
                'section'    => 'lnx_new_section_color_accent',
                'settings'   => 'lnx_header_menu_color',
                'priority'	 => 6
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_background_color',
            array(
                'label'      => 'Footer Background Color',
                'section'    => 'lnx_new_section_color_accent',
                'settings'   => 'lnx_footer_background_color',
                'priority'	 => 7
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_font_color',
            array(
                'label'      => 'Footer Accent Color',
                'section'    => 'lnx_new_section_color_accent',
                'settings'   => 'lnx_footer_font_color',
                'priority'	 => 8
            )
        )
    );
    // Footer

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'footer_copyright',
            array(
                'label'      => 'Footer copyright text',
                'section'    => 'lnx_new_section_footer',
                'settings'   => 'lnx_footer_copyright',
                'type'		 => 'text',
                'priority'	 => 1
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'upload_footer_logo_1',
            array(
                'label'      => 'Upload Left Footer Image',
                'section'    => 'lnx_new_section_footer',
                'settings'   => 'lnx_footer_logo_1',
                'priority'	 => 2
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'upload_footer_logo_2',
            array(
                'label'      => 'Upload Right Footer Image',
                'section'    => 'lnx_new_section_footer',
                'settings'   => 'lnx_footer_logo_2',
                'priority'	 => 3
            )
        )
    );
    // Custom CSS
    $wp_customize->add_control(
        new Customize_CustomCss_Control(
            $wp_customize,
            'custom_css',
            array(
                'label'      => 'Custom CSS',
                'section'    => 'lnx_new_section_custom_css',
                'settings'   => 'lnx_custom_css',
                'type'		 => 'custom_css',
                'priority'	 => 1
            )
        )
    );

    // Remove Sections
    // $wp_customize->remove_section( 'title_tagline');
    // $wp_customize->remove_section( 'nav');
    // $wp_customize->remove_section( 'static_front_page');
    $wp_customize->remove_section( 'colors');
    $wp_customize->remove_section( 'background_image');

}
add_action( 'customize_register', 'lnx_register_theme_customizer' );

