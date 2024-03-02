<?php
get_header();
?>
<div class="row justify-content-center">
    <div class="col-10">
        <h1 class="text-center"><?php echo the_title(); ?></h1>
    </div>
</div>
<?php get_sidebar(); ?>
<?php   
        global $post;
        $pageName = $post->post_name;
        if (locate_template( array( 'template-parts/content-' . $pageName . '.php' ) ) != '') {
            // yep, load the page template
            get_template_part('template-parts/content', $pageName);
        } else {
            // nope, load the default
            get_template_part( 'template-parts/content', 'page' );
        }
    ?>

<?php
get_footer();