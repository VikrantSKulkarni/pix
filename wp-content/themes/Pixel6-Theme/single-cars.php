<?php get_header();?>
<?php get_sidebar(); ?>
<?php 
    $color = get_post_meta($post->ID, 'color', true); 
    $reg_no = get_post_meta($post->ID, 'registration_number', true);
    ?>

<div class="row jsutify-content-center">
    <div class="col-10">
    <div class="card">
            <?php  echo get_the_post_thumbnail(null,'medium'); ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                <p><b>Color : </b><?php echo $color;?></p>
                <p><b>Registration No.: </b><?php echo $reg_no; ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>