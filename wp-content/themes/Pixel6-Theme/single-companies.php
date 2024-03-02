<?php get_header();?>
<?php get_sidebar(); ?>
<?php
    $company_location = get_post_meta($post->ID, 'company_location', true);
    $number_of_employees = get_post_meta($post->ID, 'number_of_employees', true);
    $registration_number = get_post_meta($post->ID, 'registration_number', true);

    $address1 = get_post_meta($post->ID, 'address1', true);
    $address2 = get_post_meta( $post->ID, 'address2', true );
    $country = get_post_meta($post->ID, 'country', true);

    $state = get_post_meta($post->ID, 'state', true);
    $city = get_post_meta($post->ID, 'city', true);


    $pin = get_post_meta($post->ID, 'pin', true);



    $color = get_post_meta($post->ID, 'color', true); 
    $reg_no = get_post_meta($post->ID, 'registration_number', true);
    ?>

<div class="row jsutify-content-center">
    <div class="col-10">
    <div class="card">
            <?php  echo get_the_post_thumbnail(null,'large'); ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                <p class="card-text"><?php echo get_the_content(); ?></p>
                <p><b>Location : </b><?php echo $company_location;?></p>
                <p><b>Registration No.: </b><?php echo $registration_number; ?></p>
                <p><b>Number of Employees : </b><?php echo $number_of_employees; ?></p>
                <hr>
                <h5>Company Location :</h5>
                <p>Address Line 1 : <?php echo $address1; ?></p>
                <p>Address Line 2 : <?php echo $address2; ?></p>
                <p>Country : <?php echo $country; ?></p>
                <p>State : <?php echo $state; ?></p>
                <p>City : <?php echo $city; ?></p>
                <p>Pin : <?php echo $pin; ?></p>
            </div>
        </div>
    </div>
</div>
