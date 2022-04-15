<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $really_easy_banner = '_really_easy_banner';

    //
    // Create options
    CSF::createOptions($really_easy_banner, array(
        'menu_title' => 'Really Easy Banner',
        'menu_slug' => 'really_easy_banner_options',
        'nav' => 'inline',
        'menu_position' => 3,
    ));

    //
    // Create a section
    CSF::createSection($really_easy_banner, array(
        'title' => 'Layout',
        'fields' => array(

            array(
                'id' => 'banner_layout',
                'type' => 'image_select',
                'title' => 'Layout Select',
                'options' => array(
                    'banner-1' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                    'banner-2' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                    'banner-3' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
                ),
                'default' => 'banner-2'
            ),

        )
    ));

}
