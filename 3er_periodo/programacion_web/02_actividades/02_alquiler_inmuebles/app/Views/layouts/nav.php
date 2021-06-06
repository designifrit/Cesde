<nav id="nav">
    <div class="navbar">
        <div id="login" class="container">
            <ul>
                <?php
                    $session = session();

                    $signIn = base_url()."/public/signin";
                    $signUp = base_url()."/public/signup";
                    $account = base_url()."/public/account";
                    $signout = base_url()."/public/account/signout";

                    if($session -> get('role') == '1' || $session -> get('role') == '0'){
                        $template = "
                            <li class='nav-account'><a href='{$account}'><span class='material-icons'>face</span>Cuenta</a></li>
                            <li class='nav-signout'><a href='{$signout}'><span>•</span>Salir</a></li>
                        ";
                        echo $template;
                    }else{
                        $template = "
                            <li class='nav-login'><a href='{$signIn}'><span class='material-icons'>account_circle</span>Log in</a></li>
                            <li class='nav-signin'><a href='{$signUp}'><span>•</span>Crear cuenta</a></li>
                        ";
                        echo $template;
                    }
                ?>

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

                <?php
                    $session = session();

                    $apartment = base_url()."/public/apartment";
                    $addApartment = base_url()."/public/apartment/create-apartment";
                    $reservation = base_url()."/public/reservation";

                    if($session -> get('role') == '1'){
                        $template = "
                            <li><a href='{$addApartment}'>add apartamento</a></li>
                            <li><a href='{$reservation}'>reservas</a></li>
                        ";
                        echo $template;
                    }elseif($session -> get('role') == '0'){
                        $template = "
                            <li><a href='{$reservation}'>reservas</a></li>
                        ";
                        echo $template;
                    }
                ?>

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
                            <li><a href="<?php echo base_url().'/public/apartment'?>"><span class='material-icons'>apartment</span>apartamentos</a></li>

                            <?php
                                $session = session();
                                
                                $apartment = base_url()."/public/apartment";
                                $addApartment = base_url()."/public/apartment/create-apartment";
                                $reservation = base_url()."/public/reservation";
            
                                if($session -> get('role') == '1'){
                                    $template = "
                                        <li><a href='{$addApartment}'><span class='material-icons'>add_circle</span>add apartamento</a></li>
                                        <li><a href='{$reservation}'><span class='material-icons'>airplane_ticket</span>reservas</a></li>
                                    ";
                                    echo $template;
                                }elseif($session -> get('role') == '0'){
                                    $template = "
                                        <li><a href='{$reservation}'><span class='material-icons'>airplane_ticket</span>reservas</a></li>
                                    ";
                                    echo $template;
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>