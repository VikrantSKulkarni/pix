<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel6 Team </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php wp_head(); ?>

</head>
<body>
    
<div class="wrapper">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <span class="logo-custom text-start ps-2"><img src="https://pears-live.s3.ap-south-1.amazonaws.com/resized/license_logo_thumb/1/logo-pears.png" class="img-fluid" /></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu'=>'navbarSupportedContent',
                'menu_class'=> 'navbar-nav mr-auto',
            )
        )
        ?>
  </div>
</nav> 
