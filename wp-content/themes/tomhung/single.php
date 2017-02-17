<?php 
	get_header();
?>
		<div class="content">
			<p>
			<?php 
			if(have_posts()){
				while(have_posts()){
					the_post();
					$title = get_the_title();
					$content = get_the_content();
					echo '<h2>' . $title .'</h2>';
					echo '<p>' . $content .'</p>';
				}
			}
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