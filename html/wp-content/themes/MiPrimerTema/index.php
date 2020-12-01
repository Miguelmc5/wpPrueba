<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<?php wp_head(); ?>

</head>
<body>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php
if ( have_posts() ) :

    while ( have_posts() ) :
	    the_post();
        //the_shortlink();

	    the_post_thumbnail('thumbnail');
	    the_title('<H1> Titulo:', '</H1>');
	    ?>

        <h3> <?php the_excerpt(); ?> </h3>

<?php

        the_content();
	    wp_link_pages();

	    //edit_post_link('Editar ','','<strong>||</strong>');
	    //comments_popup_link(' Sin Comentarios', '1 Comentario', '% Comentarios');

    endwhile;

	if ( get_next_posts_link() ) {
		next_posts_link();
	}

	if ( get_previous_posts_link() ) {
		previous_posts_link();
	}
	?>

<?php else: ?>

	<p>No posts found. :(</p>

<?php endif; ?>
<?php  get_footer();
        wp_footer();
?>
</body>
</html>