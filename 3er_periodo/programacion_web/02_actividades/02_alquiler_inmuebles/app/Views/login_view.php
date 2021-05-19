<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
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
            <h2>Inicia sesión</h2>
        </div>
        <form method="POST" action="<?php echo base_url();?>/public/signin">
            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Respetamos tu privacidad, nunca compartimos tus datos con nadie.</div>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="pass">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="recordarme">
                <label class="form-check-label" for="recordarme">Recordarme</label>
            </div>
            <button type="submit" class="btn button">Submit</button>
        </form>
    </article>
</main>