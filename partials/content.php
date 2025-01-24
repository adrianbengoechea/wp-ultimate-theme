<?php if (have_posts()){ ?>
            
<?php while (have_posts()){  the_post();  ?>
    
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php the_content(); ?>
    
</article>

<?php }; ?>

<?php  }else{  ?>

<article>
    
    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
    
</article>

<?php } ?>

