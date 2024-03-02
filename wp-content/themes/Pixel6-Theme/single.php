
<div class="wrapper">
<?php get_header();?>
<?php get_sidebar(); ?>

<section class="main-content">
<div class="row m-0 mt-4 position-relative">
   <div class="col-md-8 px-md-0 pb-3">
      <div class="user-right-container">
         <div class="row m-0">
            <div class="col-md-12 bg-white rounded box-shadow">
               <div class="row">
                  <div class="col-md-5 p-0 position-relative">
                  <?php $image_attributes_logo = wp_get_attachment_image_src(get_field('profile_picture'),'medium')[0]; ?>
                     <img src="<?php echo $image_attributes_logo; ?>" alt="<?php echo get_field('first_name'); ?>" class="user-detail-img d-block  mx-auto mt-md-0 mt-2 rounded-start profile-img h-100 w-100">
                     <div class="position-absolute w-100 bottom-0 p-2 rounded-start">
                        <a href="mailto:<?php echo get_field('email'); ?>" title="<?php echo get_field('email'); ?>"><i class="fa-solid fa-envelope border rounded-circle p-1 me-2 border-light text-light"></i></a>
                        <a href="tel:<?php echo get_field('contact_no'); ?>" title="<?php echo get_field('contact_no'); ?>"><i class="fa-solid fa-phone border rounded-circle p-1 me-2 border-light text-light"></i></a>
                        <a href="<?php echo get_field('linked_in'); ?>" title="<?php echo get_field('linked_in'); ?>" target="_blank"><i class="fa-brands fa-linkedin border rounded-circle p-1 border-light text-light"></i></a>
                     </div>
                  </div>
                  <div class="col-md-7 user-detail position-relative px-4 <?php if((get_field('gender'))== 20){ echo "user-detail-female-bg1"; }else{ echo "user-detail-male-bg1";  }?>">
                     <h2 class="text-danger fw-semibold mt-4 mb-3"><?php echo get_field('first_name'); ?> <?php echo get_field('last_name'); ?></h2>
                     <div class="designation row mx-0 mb-3">
                        <div class="empid-user col-2 py-2 rounded-start text-center">
                           <h5 class="fw-semibold mb-0 text-dark"><?php echo get_field('employee_id'); ?></h5>
                        </div>
                        <div class="emp-des-user col-10 py-2 rounded-end">                 
                           <h5 class="fw-semibold mb-0 text-muted text-start"><?php echo get_field('designation'); ?></h5>
                        </div>
                     </div>
                     <?php if (get_the_excerpt()){ ?>
                     
                     <h6 class="emp-dis-user mx-0 pe-2 text-muted mb-5 font-size-14 lh-base fst-italic">
                        <?php echo get_the_excerpt(); ?>
                     </h6>
                     <?php }elseif(get_field('thoughts')){ ?>
                     <h6 class="emp-dis-user mx-0 pe-2 text-muted mb-5 font-size-14 lh-base fst-italic"><?php echo get_field('thoughts'); ?></h6>
                     <?php  } else {?>
                        <h6 class="emp-dis-user mx-0 pe-2 text-muted mb-5 font-size-14 lh-base fst-italic"><?php echo get_field('first_name'); ?>
                           <?php echo get_field('first_name'); ?> has not 
                           posted their bio yet so this is a dummy text. This will be replaced by the content when added by them. Thanks!
                        </h6>
                     <?php }?>
                     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <?php $counter  = 1;
                         foreach(get_field('awards') as $award ) {?>
                            <div class="carousel-item <?php if($counter == 1){ echo "active";} ?>">
                              <div class="d-flex justify-content-center justify-content-md-start  mb-2">
                                 <img src="<?php echo bloginfo('template_directory'); ?>/images/trophy.svg" class="" />
                                 <div class="award-info ps-2 align-self-center">
                                    <p class="font-size-14 fw-bold"><?php echo( $award['award_title']); ?></p>
                                    <p class="font-size-12 text-muted pt-1"><?php echo( $award['year']); ?></p>
                                 </div>
                              </div>
                           </div>
                        <?php $counter ++;}?>
                        </div>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="text-danger">&raquo;</span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12 mt-3 p-0">
               <div class="progress-section row bg-white p-2 m-0 rounded box-shadow">
                  <div class="col-md-12 mt-3 p-0">
                     <div class="progress-section row bg-white p-2 m-0 rounded box-shadow">
                        <?php foreach(get_field('skills') as $skill ) {?>
                        <div class="col d-flex align-items-center py-3">
                           <div class="progress mx-auto" data-value='<?php echo $skill['rating']; ?>'>
                              <span class="progress-left">
                              <span class="progress-bar border-warning"></span>
                              </span>
                              <span class="progress-right">
                              <span class="progress-bar border-warning"></span>
                              </span>
                              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                 <span class="text-muted"><?php echo $skill['skill']; ?></span>
                              </div>
                           </div>
                        </div>
                        <?php }?>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12 mt-3 bg-white rounded box-shadow">
               <h6 class="mx-2 my-4 fw-semibold">Work Profile</h6>
               <table class="table">
                  <tr>
                     <th>Sr. No.</th>
                     <th>Project</th>
                     <th>Client</th>
                     <th>Status</th>
                  </tr>
                  <?php
                    $counter = 1;
                  foreach(get_field('project') as $project){ ?>
                  <tr>
                     <td><?php echo $counter ?></td>
                     <td><?php echo $project['project_name'] ?></td>
                     <td><?php echo $project['client_name'] ?></td>
                     <td><?php echo $project['status'] ?></td>
                  </tr>
                  <?php $counter = $counter + 1;} ?>
               </table>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-4 ps-md-0 pe-2">
      <div class="row m-0">
         <div class="col-12 mb-3 bg-white p-3 rounded box-shadow">
            <div class="company-record row text-center ">
               <div class="col-5 px-2 py-3">
                  <h2 class="record-count mb-2 text-success">
                  <?php 
                     $date = get_field('date_of_joining');
                     $currentDate = date ('d-m-Y');
                         $startDate = date_create($date);
                         $endDate   = date_create($currentDate);
                         $diff = date_diff($startDate, $endDate);
                         $days =  (int)$diff->format("%a");
                     ?>
                  <?php echo $days;?>
                  </h2>
                  <p class="record-label">Days@ <?php echo get_field('product_name'); ?> Company </p>
               </div>
               <div class="col-2 vertical-hr">
                  <div class="vr vr-divider"></div>
               </div>
               <div class="col-5 px-2 py-3">                  
                  <p class="record-count mb-2"><?php echo count(get_field('project')); ?></p>
                  <p class="record-label">Projects</p>
               </div>
            </div>
         </div>
         <div class="col-md-12 bg-white mb-3 p-3 rounded box-shadow">
            <table class="table m-0">
               <tr>
                  <th class="text-muted">Qualification</th>
                  <td class="text-dark"><?php echo get_field('higher_education'); ?></td>
               </tr>
               <tr>
                  <th class="text-muted">Date of Birth</th>
                  <td class="text-dark"><?php echo get_field('date_of_birth'); ?></td>
               </tr>
               <tr>
                  <th class="text-muted">Blood group</th>
                  <td class="text-dark"><?php echo get_field('blood_group'); ?></td>
               </tr>
               <tr class="transparent-border">
                  <th class="text-muted">Contact Number </th>
                  <td class="text-dark"><a href="tel:<?php echo get_field('contact_no'); ?>"><?php echo get_field('contact_no'); ?></a></td>
               </tr>
               <tr class="transparent-border">
                  <th class="text-muted">Emergency Number </th>
                  <td class="text-dark"><a href="<?php echo get_field('emergency_no'); ?>"><?php echo get_field('emergency_no'); ?></a></td>
               </tr>
            </table>
         </div>
         <div class="col-md-12 bg-white p-3 mb-3 rounded box-shadow">
            <h6 class="text-muted fw-semibold mb-3">Reporting Manager</h6>
            <a href="<?php echo get_permalink(get_field('reporting_manager')); ?> ">
               <div class="d-flex">
                  <img src="<?php echo wp_get_attachment_image_src(get_post_field('profile_picture',get_field('reporting_manager')))[0] ?>" alt="imagg" class="rounded-circle align-self-center manager-img"></td>
                  <h6 class="align-self-center ms-3 mb-0 text-danger font-size-14"><?php 
                  print_r(get_post_field('first_name',get_field('reporting_manager'))); ?></h6>
               </div>
            </a>
         </div>
         <div class="col-md-12 bg-white p-3 rounded box-shadow">
            <h6 class="text-muted fw-semibold mb-3">Certifications</h6>
            <?php foreach( get_field('certificates') as $certificate){ ?>
            <div class="d-flex align-items-center pb-3">
               <img src="<?php echo bloginfo('template_directory'); ?>/images/certificate.svg" class="" />
               <div class="px-3">
                  <h6 class="font-size-14 mb-0"><?php echo $certificate['course_name']  ?></h6>
                  <p class="text-muted"><?php echo $certificate['year'] ?></p>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</div>
</section>
<?php get_footer();?>