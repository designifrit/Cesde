<nav id="nav">
    <div class="navbar">
        <div id="login" class="container">
            <ul>
                <li><a href="<?php echo base_url().'/public/login'?>"><span class="material-icons">account_circle</span>Log in</a></li>
                <li><a href="#"><span>•</span>Crear cuenta</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div id="nav_menu" class="container">
            <a href="<?php echo base_url().'/public'?>" class="navbar-brand"><img src="<?php echo base_url();?>/public/assets/img/logo.png" width="70" alt="Logo - Volver al inicio"></a>
            <ul id="nav_desktop">
                <li><a href="<?php echo base_url().'/public/task'?>">Task</a></li>
                <li><a href=<?php echo base_url().'/public/task/create'?>>Crear task</a></li>
                <!-- <li><a href="update.php">Update</a></li>
                <li><a href="delete.php">Delete</a></li> -->
            </ul>
        </div>
    </div>
</nav>