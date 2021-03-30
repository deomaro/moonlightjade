<?php

function add_classes_to_pages_li($t){
  return str_replace('page_item', 'page_item nav-item', $t);
}

function add_classes_to_pages_a($t){
  return str_replace('<a ', '<a class="nav-link mNav" ', $t);
}

add_filter('wp_list_pages', 'add_classes_to_pages_li');
add_filter('wp_list_pages', 'add_classes_to_pages_a');


?>
