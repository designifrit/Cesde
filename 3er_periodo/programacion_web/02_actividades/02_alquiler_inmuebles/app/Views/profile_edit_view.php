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
                <img class="edit_perfil" src="<?php echo base_url();?>/public/uploads/perfil/foto-perfil.jpg" alt="Foto de perfil">
                <h2 class="">Editar cuenta</h2>
            </div>
        </div>
        <form class="row" method="POST" action="<?php echo base_url(); ?>/public/create-account">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" maxlength="20" required>
                <div id="nameHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="last-name" name="last-name" placeholder="John Doe" maxlength="50" required>
                <div id="lastnameHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nombre@dominio.com" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
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
                <div id="passwordRecoveryHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="profile-photo" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="profile-photo" name="profile-photo" required>
                <div id="photoHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">País</label>
                <select class="form-select" name="country" id="country" aria-label="Default select example" required>
                    <option value="" selected>Selecciona tu país</option>
                    
                </select>
                <div id="countryHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <select class="form-select" name="city" id="city" aria-label="Default select example" required>
                    <option value="" selected>Selecciona tu ciudad</option>
                    
                </select>
                <div id="cityHelp" class="form-text"></div>
            </div>
            <div class="form-floating padding_bottom">
                <textarea class="form-control" placeholder="Deja una reseña" id="description" name="description" maxlength="300" required></textarea>
                <label for="description">Descripción</label>
                <div id="descriptionHelp" class="form-text"></div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="role" name="role">
                <label class="form-check-label" for="role">Hazte anfitrión
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disfruta de la flexibilidad de ser tu propio jefe, ganar ingresos extra y hacer amistades para toda la vida al compartir tu espacio">
                        <button class="btn popover_helper ms-1" type="button">?</button>
                    </span>
                </label>
            </div>
            <button type="submit" class="btn button mt-3" onclick="validation()">Guardar</button>
        </form>
    </article>
</main>

<script>
    function validation() {
        var nameHelp = document.getElementById("name");
        var lastnameHelp = document.getElementById("last-name");
        var emailHelp = document.getElementById("email");
        var passwordHelp = document.getElementById("password");
        var passwordRecoveryHelp = document.getElementById("passwordRecovery");
        var photoHelp = document.getElementById("profile-photo");
        var countryHelp = document.getElementById("country");
        var cityHelp = document.getElementById("city");
        var descriptionHelp = document.getElementById("description");

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

        if(passwordHelp != passwordRecoveryHelp){
            document.getElementById("passwordRecoveryHelp").innerHTML = "Las dos contraseñas deben coincidir";
        }else{
            document.getElementById("passwordRecoveryHelp").innerHTML = "";
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