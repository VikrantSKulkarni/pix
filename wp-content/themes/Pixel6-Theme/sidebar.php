<div class="sidebar">
    <aside>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'side-menu',
                        'menu'=>'navbarSupportedContent',
                        'menu_class'=> 'navbar-nav mr-auto',
                    )
                )
                ?>
                <!--<ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">  <i class="menu-icon fa-fw fa fa-qrcode"></i>  Dashboard </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">  <i class="menu-icon fa-fw fa-solid fa-user"></i>  My Timesheets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="menu-icon fa-fw fa-solid fa-umbrella-beach"></i> Leaves </a>
                    </li>
                </ul>-->
            </div>
        </nav>    
    </aside>
</div>