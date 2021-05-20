<nav id="nav">
    <div class="navbar">
        <div id="login" class="container">
            <ul>
                <li><a href="<?php echo base_url().'/public/login'?>"><span class="material-icons">account_circle</span>Log in</a></li>
                <li><a href="<?php echo base_url().'/public/create-account'?>"><span>•</span>Crear cuenta</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div id="nav_menu" class="container">
            <!-- Desktop menu -->
            <a href="<?php echo base_url().'/public'?>" class="navbar-brand"><img src="<?php echo base_url();?>/public/assets/img/logo.png" width="70" alt="Logo - Volver al inicio"></a>
            <ul id="nav_desktop">
                <li><a href="<?php echo base_url().'/public'?>">Home</a></li>
                <li><a href="<?php echo base_url().'/public/task'?>">Apartamentos</a></li>
                <li><a href="<?php echo base_url().'/public/task/create'?>">add apartamento</a></li>
                <li><a href="<?php echo base_url().'/public/perfil'?>">perfil</a></li>
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
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">menu</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul>
                            <li><a href="<?php echo base_url().'/public'?>"><span class="material-icons">home</span>Home</a></li>
                            <li><a href="<?php echo base_url().'/public/task'?>"><span class="material-icons">maps_home_work</span>Apartamentos</a></li>
                            <li><a href="<?php echo base_url().'/public/task/create'?>"><span class="material-icons">add_circle</span>Registrar apartamento</a></li>
                            <li><a href="<?php echo base_url().'/public/perfil'?>"><span class="material-icons">perm_identity</span>perfil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>