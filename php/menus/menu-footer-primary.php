<?php 
    /**
     * php/menus/menu-footer-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.02.05)
     * @copyright 2023
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-6',
            'menu_id' => 'Footer-Primary'
        )
    );
?>