<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Perfil de usuario</li>
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
            <h2>Información de perfil</h2>
        </div>
        <div class="col-8 col-sm-9 col-md-10">
            <h4 class="mt-3"><?php echo (session("name")); ?><em> / <span><?php echo (session("lastName")); ?></span></em></h4>
            <i class="ticket"><span class="material-icons">assignment_ind</span> <?php echo (session("role")); ?></i><i class="ticket"><span class="material-icons">email</span> <?php echo (session("email")); ?></i>
            <p class="mt-3 pcolor"><?php echo (session("idCountry")); ?> • <?php echo (session("idCity")); ?></p>
            <hr>
        </div>
        <div class="col-4 col-sm-3 col-md-2">
            <img class="perfil" src="<?php echo (session("profilePhoto")); ?>" alt="Foto de perfil">
        </div>
        <div class="col-12 mt-3">
            <p><?php echo (session("description")); ?></p>
        </div>
        <a href='#' class='btn button mcontent_top'>Editar cuenta</a>
    </article>
</main>