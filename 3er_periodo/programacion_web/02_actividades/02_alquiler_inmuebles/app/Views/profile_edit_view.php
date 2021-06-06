<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public/account">Perfil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar cuenta</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<main id="main" class="container ">
    <article class="row">
        <div class="col-12 mcontent_bottom">
            <div class="d-flex align-items-start">
                <img class="edit_perfil" src="<?php echo (session("profilePhoto")); ?>" alt="Foto de perfil">
                <h2 class="">Editar cuenta</h2>
            </div>
        </div>
        <form class="row" method="POST" action="<?php echo base_url();?>/public/account/edit-account/update" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo (session("name")); ?>" placeholder="John Doe" maxlength="20" required>
                <div id="nameHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="last-name" name="last-name" value="<?php echo (session("lastName")); ?>" placeholder="John Doe" maxlength="50" required>
                <div id="lastnameHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo (session("email")); ?>" placeholder="nombre@dominio.com" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" maxlength="40" required>
                <div id="passwordHelp" class="form-text"></div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="passwordRecovery" class="form-label">Verifica tu contraseña</label>
                <input type="password" class="form-control" id="passwordRecovery" name="passwordRecovery" maxlength="40" required>
                <div id="passwordrecoveryHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="profile-photo" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="profile-photo" name="profile-photo" required>
                <div id="photoHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">País</label>
                <select class="form-select" name="country" id="country" aria-label="Default select example" required>
                    <option value="" selected>Selecciona tu país (<?php echo (session("country")); ?>)</option>
                    <?php
                        foreach ($country as $row) {
                            echo '<option value="' . $row["idCountry"] . '">' . $row["country"] . '</option>';
                        }
                    ?>
                </select>
                <div id="countryHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <select class="form-select" name="city" id="city" aria-label="Default select example" required>
                    <option value="" selected>Selecciona tu ciudad (<?php echo (session("city")); ?>)</option>
                    <?php
                        foreach ($city as $row) {
                            echo '<option value="' . $row["idCity"] . '">' . $row["city"] . '</option>';
                        }
                    ?>
                </select>
                <div id="cityHelp" class="form-text"></div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Deja una reseña" id="description" name="description" value="" maxlength="300" required><?php echo (session("description")); ?></textarea>
                <label for="description">Descripción</label>
                <div id="descriptionHelp" class="form-text"></div>
            </div>
            <div class="mb-3 form-check mt-3 mcontent_bottom">

                <input type="hidden" class="form-check-input" id="role" name="role" name="accept" value="0">
                <input type="checkbox" class="form-check-input" id="role" name="role" name="accept" value="1">

                <label class="form-check-label" for="role">Hazte anfitrión
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disfruta de la flexibilidad de ser tu propio jefe, ganar ingresos extra y hacer amistades para toda la vida al compartir tu espacio">
                        <button class="btn popover_helper ms-1" type="button">?</button>
                    </span>
                </label>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn button" onclick="validation()">Guardar</button>
                <a href="<?php echo base_url();?>/public/account" class="btn button cancel" style="margin-left:1rem; border:none;">Cancelar</a>
            </div>
        </form>
    </article>
</main>

<script>
    function validation() {
        var nameHelp = document.getElementById("name");
        var lastnameHelp = document.getElementById("last-name");
        var emailHelp = document.getElementById("email");
        var passwordHelp = document.getElementById("password");
        var photoHelp = document.getElementById("profile-photo");
        var countryHelp = document.getElementById("country");
        var cityHelp = document.getElementById("city");
        var descriptionHelp = document.getElementById("description");
        
        var password = document.getElementById("password").value;
        var passwordrecoveryHelp = document.getElementById("passwordRecovery").value;

        if(!nameHelp.checkValidity()){
            document.getElementById("nameHelp").innerHTML = nameHelp.validationMessage;
        }else{
            document.getElementById("nameHelp").innerHTML = "";
        }

        if(!lastnameHelp.checkValidity()){
            document.getElementById("lastnameHelp").innerHTML = lastnameHelp.validationMessage;
        }else{
            document.getElementById("lastnameHelp").innerHTML = "";
        }

        if(!emailHelp.checkValidity()){
            document.getElementById("emailHelp").innerHTML = emailHelp.validationMessage;
        }else{
            document.getElementById("emailHelp").innerHTML = "";
        }

        if(!passwordHelp.checkValidity()){
            document.getElementById("passwordHelp").innerHTML = passwordHelp.validationMessage;
        }else{
            document.getElementById("passwordHelp").innerHTML = "";
        }

        if(password != passwordrecoveryHelp){
            document.getElementById("passwordrecoveryHelp").innerHTML = "Las dos contraseñas deben coincidir";
        }else{
            document.getElementById("passwordrecoveryHelp").innerHTML = "";
        }

        if(!photoHelp.checkValidity()){
            document.getElementById("photoHelp").innerHTML = photoHelp.validationMessage;
        }else{
            document.getElementById("photoHelp").innerHTML = "";
        }

        if(!countryHelp.checkValidity()){
            document.getElementById("countryHelp").innerHTML = countryHelp.validationMessage;
        }else{
            document.getElementById("countryHelp").innerHTML = "";
        }

        if(!cityHelp.checkValidity()){
            document.getElementById("cityHelp").innerHTML = cityHelp.validationMessage;
        }else{
            document.getElementById("cityHelp").innerHTML = "";
        }

        if(!descriptionHelp.checkValidity()){
            document.getElementById("descriptionHelp").innerHTML = descriptionHelp.validationMessage;
        }else{
            document.getElementById("descriptionHelp").innerHTML = "";
        }
    }
</script>