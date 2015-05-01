<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo("html_type");?>" charset="<?php bloginfo("charset");?>" />
		 <!--this is how we use a template name to create our own wp name-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen" /> <!-- misto dlouheho linku smerujici k style.css staci tohle PHP -->
</head>

<body>
	<div id="wrap">
		
<!-- Begin Header -->
		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"> <?php bloginfo('name')?></a></h1>
			<div class="tagline"> <?php bloginfo('description'); ?> </div>
		</div> 
<!-- End Header -->
		
	
<!-- BEGIN CONTENT - Start WP LOOP -->
		<?php if(have_posts()) : ?>	
			<?php while(have_posts()) : the_post() ?>
			
				<div class="post_snippet">
				<h2> <a href="<?php  the_permalink(); ?>" tittle="Permanent link to <?php the_title_attribute(); ?>"> <?php the_title(); ?> </a> </h2>
				<?php the_content('Continue Reading...'); ?> <!-- parameter for reading more -->	
				</div>
				
			<?php endwhile; ?>
			<p><?php previous_posts_link('Previous Entries'); ?> <?php next_posts_link('Older Entries'); ?></p> <!-- previous and next entries option -->
			<?php else :?>
			<h2>Sorry but we could not find what you were looking for. But don't give up, keep at it!</h2> <!-- in case there are no posts -->
			<?php endif; ?>	
<!-- END CONTENT -->	
			
<!-- Begin Footer -->
				<div id="footer">
					<p><?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org">Wordpress</a> |
					<a href="<?php bloginfo('rss2_url'); ?>" >Full Post RSS</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments RSS </a></p>
				</div>	
			
			
<!-- End Footer -->
			
		
	</div>
	


</body>
</html>