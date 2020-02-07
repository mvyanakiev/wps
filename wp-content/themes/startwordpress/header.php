<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	
	<!--    <title> <?php echo get_bloginfo( 'title' );?> </title> -->


    
	<!-- link cusom css with php -->
	<!-- 	<link href="<?php echo get_bloginfo('template_directory'); ?>/css/blog.css" rel="stylesheet"> -->
	
	<?php wp_head();?>
  </head>

  <body>

	<div class="blog-masthead">
		<div class="container">
			<nav class="blog-nav">
				<a class="blog-nav-item active" href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a>
				<?php wp_list_pages( '&title_li=' ); ?>
			</nav>
		</div>
	</div>

    <div class="container">

		<div class="blog-header">
			<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
			<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
		</div>