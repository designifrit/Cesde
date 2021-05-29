<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sign up</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<main id="main" class="container ">
    <article class="row">
        <div class="col-12">
            <h2>Crear cuenta</h2>
        </div>
        <form method="POST" action="<?php echo base_url(); ?>/public/create-account">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" maxlength="20" required>
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="last-name" name="last-name" placeholder="John Doe" maxlength="50" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nombre@dominio.com" maxlength="50" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" maxlength="40" required>
            </div>
            <div class="mb-3">
                <label for="profile-photo" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="profile-photo" name="profile-photo">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">País</label>
                <select class="form-select" name="country" id="country" aria-label="Default select example" required>
                    <option value="" selected>Selecciona tu país</option>
                    <?php
                    foreach ($country as $row) {
                        echo '<option value="' . $row["idCountry"] . '">' . $row["country"] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <select class="form-select" name="city" id="city" aria-label="Default select example" required>
                    <option value="" selected>Selecciona tu ciudad</option>
                    <?php
                    foreach ($city as $row) {
                            echo '<option value="' . $row["idCity"] . '">' . $row["city"] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-floating padding_bottom">
                <textarea class="form-control" placeholder="Deja una reseña" id="description" name="description" maxlength="300"></textarea>
                <label for="description">Descripción</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="role" name="role">
                <label class="form-check-label" for="role">Hazte anfitrión
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disfruta de la flexibilidad de ser tu propio jefe, ganar ingresos extra y hacer amistades para toda la vida al compartir tu espacio">
                        <button class="btn popover_helper ms-1" type="button">?</button>
                    </span>
                </label>
            </div>
            <button type="submit" class="btn button mt-3">Registrarse</button>
        </form>
    </article>
</main>
