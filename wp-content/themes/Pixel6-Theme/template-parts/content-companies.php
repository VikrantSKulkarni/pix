<?php get_header();?>
<?php get_sidebar();?>

<div class="row">
    <?php 
    $args = array( 'post_type' => 'companies');
    $query  = new WP_Query( $args );
    if ($query->have_posts()) : 
        while ($query->have_posts()) : $query->the_post();
    ?>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <?php echo get_the_post_thumbnail(get_the_ID(),'medium'); ?>
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</div>