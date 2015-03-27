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
		            	<p class="blog-article">
				        	<?php
								$my_content = get_the_content();
								if ( $my_content != '' ) {
									// Some string manipulation performed
								}
								echo $my_content; // Outputs the processed value to the page
							?>
			        	</p>
			            <div class="blog-extention">
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

						<!-- Add the pagination functions here. -->
						<div class="pagination">
							<?php previous_post_link(); ?>	
							<?php next_post_link(); ?>
						</div>

			            <div id="disqus_thread"></div>
					    <script type="text/javascript">
					        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
					        var disqus_shortname = 'inkstatus'; // required: replace example with your forum shortname

					        /* * * DON'T EDIT BELOW THIS LINE * * */
					        (function() {
					            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					        })();
					    </script>
					    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			        </div>
			        <div class="clear"></div>
			    </div>					

			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</div>

<!-- Add the pagination functions here. -->

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer();	?>