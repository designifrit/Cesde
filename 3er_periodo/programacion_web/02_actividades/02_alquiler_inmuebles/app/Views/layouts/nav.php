<nav id="nav">
    <div class="navbar">
        <div id="login" class="container">
            <ul>
                <li class="nav-login"><a href="<?php echo base_url().'/public/signin'?>"><span class="material-icons">account_circle</span>Log in</a></li>
                <li class="nav-signin"><a href="<?php echo base_url().'/public/signup'?>"><span>•</span>Crear cuenta</a></li>
                <li class="nav-account"><a href="<?php echo base_url().'/public/account'?>"><span class="material-icons">face</span>Cuenta</a></li>
                <li class="nav-signout"><a href="<?php echo base_url().'/public/account/signout'?>"><span>•</span>Salir</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div id="nav_menu" class="container">
            <!-- Desktop menu -->
            <a href="<?php echo base_url().'/public'?>" class="navbar-brand"><img src="<?php echo base_url();?>/public/assets/img/logo.png" width="70" alt="Logo - Volver al inicio"></a>
            <ul id="nav_desktop">
                <li><a href="<?php echo base_url().'/public'?>">Home</a></li>
                <li><a href="<?php echo base_url().'/public/apartment'?>">apartamentos</a></li>
                <li><a href="<?php echo base_url().'/public/apartment/create-apartment'?>">add apartamento</a></li>
                <li><a href="<?php echo base_url().'/public/reservation'?>">reservas</a></li>
            </ul>

            <!-- Mobile menu -->
            <div id="nav_mobile">
                <span class="material-icons" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    menu
                </span>
                
                <!-- off Canvas -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <img src="<?php echo base_url();?>/public/assets/img/logo.png" width="35" alt="Logo">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">easy travel</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul>
                            <li><a href="<?php echo base_url().'/public'?>"><span class="material-icons">home</span>Home</a></li>
                            <li><a href="<?php echo base_url().'/public/apartment'?>"><span class="material-icons">maps_home_work</span>Apartamentos</a></li>
                            <li><a href="<?php echo base_url().'/public/apartment/create-apartment'?>"><span class="material-icons">add_circle</span>Registrar apartamento</a></li>
                            <li><a href="<?php echo base_url().'/public/reservation'?>"><span class="material-icons">airplane_ticket</span>reservas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>