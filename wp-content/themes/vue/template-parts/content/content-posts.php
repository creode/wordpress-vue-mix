<?php 

$postsData = [];

foreach ($posts as $post) {

    // $postData[]['image'] = $image ? $image[0] : null;
    // $postData[]['name'] = $post->post_title;
    // $postData[]['excerpt'] = $post->post_excerpt;
    // $postData[]['categories'] = $category;

    $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );

    $singlePostCategories = wp_get_post_categories( $post->ID, array( 'fields' => 'all' ) );

    $categories = [];

    if ( $singlePostCategories ) {
        foreach($singlePostCategories as $category) {
            $category = [
                'name' => $category->name,
                'slug' => $category->slug,
                'id' => $category->term_id
            ];

            array_push($categories, $category);
        }
    }

    $singlePost['name'] = $post->post_title;
    $singlePost['excerpt'] = $post->post_excerpt;
    $singlePost['image'] = $image ? $image[0] : null;
    $singlePost['categories'] = $categories;
    $singlePost['id'] = $post->ID;

    $postsData[] = $singlePost;


} 

// Get all categories

$postsCategories = [];

$categories =  get_categories();

foreach ( $categories as $category ) {

    $singleCategory['name'] = $category->name;
    $singleCategory['slug'] = $category->slug;
    $singleCategory['id'] = $category->term_id;
    $singleCategory['description'] = $category->description;

    $postsCategories[] = $singleCategory;
}

// ?>

<blog-listing :posts="<?php echo htmlentities(json_encode($postsData, JSON_HEX_QUOT), ENT_QUOTES); ?>"
    :categories="<?php echo htmlentities(json_encode($postsCategories, JSON_HEX_QUOT), ENT_QUOTES); ?>" >
</blog-listing>

