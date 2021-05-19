<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <form method="POST" action="<?php echo base_url();?>/public/signin">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="nombre">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" placeholder="name@domain.com">
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <select class="form-select" id="pais" aria-label="Default select example">
                    <option selected>Selecciona tu país</option>
                    <option value="1">Colombia</option>
                    <option value="2">Chile</option>
                    <option value="3">México</option>
                    <option value="4">Perú</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <select class="form-select" id="ciudad" aria-label="Default select example">
                    <option selected>Selecciona tu ciudad</option>
                    <option value="1">Colombia</option>
                    <option value="2">Argentina</option>
                    <option value="3">Brazil</option>
                    <option value="4">Chile</option>
                    <option value="5">Ecuador</option>
                    <option value="6">México</option>
                    <option value="7">Panamá</option>
                    <option value="7">Perú</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="pass">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rol">
                <label class="form-check-label" for="rol">Hazte anfitrión
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disfruta de la flexibilidad de ser tu propio jefe, ganar ingresos extra y hacer amistades para toda la vida al compartir tu espacio">
                        <button class="btn popover_helper ms-1" type="button">?</button>
                    </span>
                </label>
            </div>
            <button type="submit" class="btn button">Submit</button>
        </form>
    </article>
</main>