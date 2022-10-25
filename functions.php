<?php

add_filter('use_block_editor_for_post', '__return_false', 10);

function get_field($key, $isAList = true) {
    return get_post_meta(get_the_ID(), $key, $isAList);
}

require_once(get_template_directory() . "/cmb2-fields/cf-page-home.php");

?>