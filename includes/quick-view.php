<?php

add_filter( 'dashboard_glance_items', 'custom_glance_items', 10, 1 );
function custom_glance_items( $items = array() ) {
    $post_types = array( 'project', 'casestudy' );
    foreach( $post_types as $type ) {
        if( ! post_type_exists( $type ) ) continue;
        $num_posts = wp_count_posts( $type );
        if( $num_posts ) {
            $published = intval( $num_posts->publish );
            $post_type = get_post_type_object( $type );
            $text = _n( '%s ' . $post_type->labels->singular_name, '%s ' . $post_type->labels->name, $published, 'your_textdomain' );
            $text = sprintf( $text, number_format_i18n( $published ) );
            if ( current_user_can( $post_type->cap->edit_posts ) ) {
            $output = '<a href="edit.php?post_type=' . $post_type->name . '">' . $text . '</a>';
                echo '<li class="post-count ' . $post_type->name . '-count">' . $output . '</li>';
            } else {
            $output = '<span>' . $text . '</span>';
                echo '<li class="post-count ' . $post_type->name . '-count">' . $output . '</li>';
            }
        }
    }
    return $items;
}
