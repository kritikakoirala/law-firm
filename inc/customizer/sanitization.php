<?php

/**
 * This page is for sanitization of all customizer in the site
 */

//  Sanitization for checkbox

//checkbox sanitization function
function kriti_law_firm_sanitize_checkbox($input)
{

    //returns true if checkbox is checked
    return (isset($input) ? true : false);
}

// Sanitization for image uploads
function kriti_law_firm_sanitize_file($file, $setting)
{

    //allowed file types
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png'
    );

    //check file type from file name
    $file_ext = wp_check_filetype($file, $mimes);

    //if file has a valid mime type return it, otherwise return default
    return ($file_ext['ext'] ? $file : $setting->default);
}
