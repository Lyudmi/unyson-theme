<?php

if (!defined('FW')) {
    die('Forbidden');
} ?>
<?php  if ( ! empty( $atts['demo_text'] ) ){ ?>
    <?php echo $atts['demo_text'] ?>

<?php }?>

<?php  if ( ! empty( $atts['demo_img'] ) ){ ?>
   <div style="text-align: center"><img src="<?php echo fw_resize( $atts['demo_img']['url'],$atts['size']['width'],$atts['size']['height'],true); ?>" alt="Alt" /></div>

<?php }?>