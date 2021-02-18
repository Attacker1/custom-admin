<?php

function my_acf_load_field($field)
{
    if (isset($_GET['post_category'])) {
        $field['value'] = $_GET['post_category'];
    }
    return $field;
}

add_filter('acf/load_field/name=post_category', 'my_acf_load_field');
