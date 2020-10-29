<?php
$newposts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'order' => 'DESC'
));

$newexames = new WP_Query(array(
    'post_type' => 'exame',
    'posts_per_page' => 5,
    'order' => 'DESC'
));

$topposts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'meta_key' => 'views',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
));

$topexames = new WP_Query(array(
    'post_type' => 'exame',
    'posts_per_page' => 5,
    'meta_key' => 'views',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
));

$disciplinas = new WP_Query(array(
    'post_type' =>  'disciplina',
    'post_per_page' => 5,
    'order' => 'DESC'
));
function getDisciPosts($disciID) {
    $disciPosts = new WP_Query(array(
        'post_type' =>  array('posts', "exame"),
        'post_per_page' => 5,
        'order' => 'DESC',
        'meta_query' => array(
            array(
              'key' => 'disciplina',
              'compare' => 'LIKE',
              'value' => $disciID
            )
         )   
    ));

    return $disciPosts;
}
?>