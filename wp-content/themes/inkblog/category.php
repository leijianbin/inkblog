<?php get_header(); ?>

<div class="main-container col1-layout">
	<div class="main">
		<div class="col-main">
			<?php if ( have_posts() ) : ?>
			<!-- single post summary -->
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="postWrapper blog-post">
					<?php 
						  $my_date = get_the_date('d, F, Y'); 
	            		  $arr = explode(",",$my_date);
	            	      //var_dump($arr);
	            	?>
	                <div class="blog-info">
			            <p class="blog-date">
							<span>
								<?php echo $arr[0];?>
							</span>
							<?php echo $arr[1];?>, <?php echo $arr[2];?>
			          	</p>
			            <p class="blog-author">by <span><?php the_field('author'); ?></span></p>
			        	<img src="<?php the_field('avastar'); ?>" />
			        </div>
		        	<div class="blog-content"> 
			            <div class="blog-image">
			            <?php if( has_post_video() ) {
			            		the_post_video( 'large' );
			            	}
			            	elseif ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('large');
							}
 						?>
			            </div>
			            <h1 class="blog-title">
				            <?php if( has_post_video() ) {
				            	echo get_the_title();
				            }?>
			            </h1>
		            	<p class="blog-article"><span style="font-family: arial, helvetica, sans-serif; font-size: large;">
				        	<?php
								$my_excerpt = get_the_excerpt();
								if ( $my_excerpt != '' ) {
									// Some string manipulation performed
								}
								echo $my_excerpt; // Outputs the processed value to the page
							?>
			        	</span></p>
			            <div class="blog-extention">
			                <p>
			                	<a href="<?php echo get_permalink(); ?>">READ MORE</a>
			                </p>
			                <div class="tags">
			                	<ul class="tags">
				                	<?php
										$posttags = get_the_tags();
										if ($posttags) {
										  foreach($posttags as $tag) {
										  		?>
									<li><a href="<?php echo get_tag_link($tag->term_id);?>"><?php echo $tag->name;?></a></li>
									<?php
										  }
										}
									?>
								</ul>
			                </div>
			            </div>
			        </div>
			        <div class="clear"></div>
			    </div>					

			<?php endwhile; // end of the loop. ?>
		</div>
		<div class="pagination">
			<!-- Add the pagination functions here. -->
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
		</div>
	</div>
</div>


<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer();	?>