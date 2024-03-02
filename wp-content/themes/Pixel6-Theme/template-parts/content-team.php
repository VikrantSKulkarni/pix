<?php get_header();?>
<?php get_sidebar();?>

<section class="main-content">
<div class="row m-0">
    <div class="col-md-8">
        <div class="user-right-container">
            <div class="row users-list pb-3">
                <?php 
                    $args = array( 'post_type' => 'team-members');
                                $query  = new WP_Query( $args );
                                if ($query->have_posts()) : 
                                    while ($query->have_posts()) : $query->the_post();
                    ?>
                <div class="col-md-3 col-6">
                    <a href="<?php the_permalink(); ?>">
                        <div class="user-index-detail">
                          <?php $image_attributes_logo = wp_get_attachment_image_src(get_field('profile_picture'))[0]; ?>
                        <img src="<?php echo $image_attributes_logo; ?>" alt="" class="users-img"> 
                        <div class="overlay">
                            <div class="text px-2">
                                <span class="user-name text-center"><?php echo get_field('first_name'); ?>   <?php echo get_field('last_name'); ?> </span>
                            </div>
                            <span class="emp-id fw-bold rounded-circle"><?php echo get_field('employee_id'); ?> </span>
                            <span class="login-status bg-success"></span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
</section>
<?php get_footer();?>