<?php
	$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'date' );
	$postslist = get_posts( $args );
	foreach ( $postslist as $post ) :
	  setup_postdata( $post ); ?> 

		<div class="post-list-item pad-t-b-30px clear">
			<div class="p-l blog-thumb">
			<a href="<?php the_permalink(); ?>">
			<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail('thumbnail');
					} 
				else  { ?> 
				<img class="img-1 p-l" src="<?php echo get_template_directory_uri();?>/img/default-post-img.jpg" alt="Logo"> 
				<?php } ?>
			</a>
			</div>
			
			<div class="p-l pad-l-20px col-3-4">
				<a  href="<?php the_permalink(); ?>" class="txt-grey-7">
				<h2 class="title-2"><?php the_title(); ?></h2>
				</a>  
				<?php the_date(); ?>
				<p><?php the_excerpt(); ?></p>
			</div>
		</div>
	<?php
	endforeach; 
	wp_reset_postdata();
?>