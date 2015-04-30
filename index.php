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
		
		<!-- BEGIN CONTENT - Start WP LOOP -->
		<?php if(have_posts()) : ?>	
			<?php while(have_posts()) : the_post() ?>
			
				<div class="post_snippet">
				<h2> <a href="<?php  the_permalink(); ?>" tittle="Permanent link to <?php the_title_attribute(); ?>"> <?php the_title(); ?> </a> </h2>
				<?php the_content(); ?>
				</div>
				
			<?php endwhile; ?>
			<?php endif; ?>	
			<!-- END CONTENT -->	
		</div> <!-- End Header -->
		
	
	</div>
	


</body>
</html>