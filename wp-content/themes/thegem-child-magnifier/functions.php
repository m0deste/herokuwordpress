<?php
function thegem_child_init() {
    remove_action('thegem_woocommerce_single_product_left', 'thegem_woocommerce_single_product_gallery', 5);
}
add_action('init', 'thegem_child_init');