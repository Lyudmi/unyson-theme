<?php
if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'option_my'   => array(
        'label'   => __('Demo text label', MY_THEME_TEXTDOMAIN),
        'desc'    => __('Demo text description', MY_THEME_TEXTDOMAIN),
        'help'    => __('Demo text help', MY_THEME_TEXTDOMAIN),
        'type'    => 'text'
    ),
    'demo_text' => array(
        'type'  => 'wp-editor',
    'value' => 'default value',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Label', MY_THEME_TEXTDOMAIN),
    'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
    'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
    'size' => 'small', // small, large
    'editor_height' => 400,
    'wpautop' => true,
    'editor_type' => false, // tinymce, html

    /**
     * Also available
     * https://github.com/WordPress/WordPress/blob/4.4.2/wp-includes/class-wp-editor.php#L80-L94
     */
),
    'demo_img' => array(
        'type'  => 'upload',
        'label' => __( 'Choose Image', 'fw' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
    'size'             => array(
        'type'    => 'group',
        'options' => array(
            'width'  => array(
                'type'  => 'text',
                'label' => __( 'Width', 'fw' ),
                'desc'  => __( 'Set image width', 'fw' ),
                'value' => 300
            ),
            'height' => array(
                'type'  => 'text',
                'label' => __( 'Height', 'fw' ),
                'desc'  => __( 'Set image height', 'fw' ),
                'value' => 200
            )
        )
    ),
    /*'image-link-group' => array(
        'type'    => 'group',
        'options' => array(
            'link'   => array(
                'type'  => 'text',
                'label' => __( 'Image Link', 'fw' ),
                'desc'  => __( 'Where should your image link to?', 'fw' )
            ),
            'target' => array(
                'type'         => 'switch',
                'label'        => __( 'Open Link in New Window', 'fw' ),
                'desc'         => __( 'Select here if you want to open the linked page in a new window', 'fw' ),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __( 'Yes', 'fw' ),
                ),
                'left-choice'  => array(
                    'value' => '_self',
                    'label' => __( 'No', 'fw' ),
                ),
            ),
        )
    )*/
);
/*$options = array(
    'option_my' => array(
        'type'  => 'addable-option',
        'value' => array('Value 1', 'Value 2', 'Value 3'),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'option' => array( 'type' => 'text' ),
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
    )
);*/