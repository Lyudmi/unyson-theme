<?php


if ( ! defined('FW') ){
    die('Forbidden');
}
$options = array(
    'main' => array(
        'type' => 'box',
        'title' => __('Testing Options', MY_THEME_TEXTDOMAIN),
        'options' => array(
            'body-color' => array(
                'type' => 'color-picker',
                'label' => __('Body Color', MY_THEME_TEXTDOMAIN),
                'value' => '#20791f',
            ),
        ),
    ),
);

