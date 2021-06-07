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
        <div class="col-12 profile">
            <div class="profile_photo">
                <img class="photo" src="<?php echo $user[0] -> profilePhoto ?>" alt="Foto de perfil">
            </div>
            <div class="profile_content">
                <h4 class="mt-3"><?php echo $user[0] -> name ?> / <span><?php echo $user[0] -> lastName ?></span></h4>
                <i class="ticket"><span class="material-icons">assignment_ind</span> <?php if ($user[0] -> role == '1') {
                        echo "Anfitrión";
                    } else {
                        echo "Invitado";
                    } ?></i>
                <i class="ticket"><span class="material-icons">email</span><?php echo $user[0] -> email ?></i>
                <p class="mt-3 pcolor"><?php echo $user[0] -> country ?> • <?php echo $user[0] -> city ?></p>
            </div>
        </div>
        <div class="col-12">
            <hr>
            <p><?php echo $user[0] -> description ?></p>
        </div>
        <div class="d-flex justify-content-end mcontent_top mt-3">
            <a href='<?php echo base_url(); ?>/public/account/edit-account' class='btn button'>Editar cuenta</a>
            <a href="<?php echo base_url(); ?>/public/account/delete" class="btn button cancel" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:1rem; border:none;">Eliminar cuenta</a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar cuenta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Estas seguro que deseas eliminar tu cuenta? Toda tu información será eliminada
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn button" data-bs-dismiss="modal">Cerrar</button>
                            <a href="<?php echo base_url(); ?>/public/account/delete">
                                <button type="button" class="btn button cancel" style="border:none;">Eliminar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </article>
</main>