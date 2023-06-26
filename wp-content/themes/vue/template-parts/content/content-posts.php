<?php 

$postData = [];

foreach ($posts as $post) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );

    $postData[]['image'] = $image ? $image[0] : null;
    $postData[]['name'] = $post->post_title;
    $postData[]['excerpt'] = $post->post_excerpt;
}
?>

<blog-listing :posts="<?php echo htmlentities(json_encode($postData, JSON_HEX_QUOT), ENT_QUOTES); ?>"></blog-listing>
