<?php 
	get_header();
?>
		<div class="content">
			<p>
			<?php 
				query_posts($args);

				while(have_posts()): the_post();
					echo '<li>';
					the_title();
					echo '<br/>';
					the_date();
					echo '<br/>';
					$link = get_permalink();
					echo get_the_content() . '<a href="' . $link . '">Read More</a>';
					echo '</li>';
				endwhile;

				wp_reset_query();
			?>	
			</p>
		</div> <!-- #content -->
		<?php 
			get_sidebar(); 
			get_footer();
		?>
	</div><!-- #wrap -->
</body>
</html>
