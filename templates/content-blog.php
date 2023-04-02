<?php 
// $blogs = Last5posts();
// var_dump($blogs);
// $last_5_posts_query->the_content();
$args = array(
    'post_type'=> 'blogs',
    'tax_query' => array(
		array(
			'taxonomy' => 'technology',
			'field'    => 'slug',
			'terms'    => array('iot'),
            
		),
	),
    'post_status' => 'publish',
    'order' => 'DESC',
  );
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
        echo "<p>".get_the_content()."</p>";
        echo get_the_post_thumbnail('', 'post-thumbnail');
        echo "<br><br>";
	}
	echo '</ul>';
} else {
	echo "no posts found";
}
