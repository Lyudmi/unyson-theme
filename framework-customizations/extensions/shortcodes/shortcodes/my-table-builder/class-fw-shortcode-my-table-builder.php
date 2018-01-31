<?php

if (!defined('FW')) {
    die('Forbidden');
}

class FW_Shortcode_My_Table_Builder extends FW_Shortcode
{
    /**
     * @internal
     */
    public function _init()
    {
        if (is_admin()) {
            $this->load_option_type();
        }
    }

    private function load_option_type()
    {
        require $this->locate_path('/includes/option-types/my-table-builder/class-fw-option-type-my-table-builder.php');
    }

}