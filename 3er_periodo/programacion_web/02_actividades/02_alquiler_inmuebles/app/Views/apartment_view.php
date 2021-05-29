
<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Apartamentos</li>
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
            <h2>Lista de apartamentos</h2>
        </div>

        <?php
            foreach($apartments as $row){
                // Se asigna la ruta: base_url + la vista: delete-task + el dato que necesitamos traer: id
                // Esos datos quedan almacenados en la URL y con PHP se traen para disponer de estos
                $deleteRoute = base_url()."/public/apartment/delete-apartment?id={$row -> idApartment}";
                $updateRoute = base_url()."/public/apartment/update-apartment?id={$row -> idApartment}";
                $detailRoute = base_url()."/public/apartment/detail-apartment?id={$row -> idApartment}";
                
                $template = "
                <div class='col-12 col-sm-12 col-md-6 col-lg-4 padding_bottom'>
                    <div class='card h-100'>
                        <img src='{$row -> photo}' class='card-img-top' alt='Producto'>
                        <div class='card-body d-flex align-content-between flex-wrap'>
                            <div style='width:100%'>
                                <span>Dirección / {$row -> city}</span>
                                <p class='card-text pcolor'>{$row -> address}</p>
                                <h4 class='card-title'>{$row -> location}</h4>
                                <p class='card-text'>{$row -> rom} habitaciones</p>
                                <p class='descripcion'>{$row -> review}</p>
                                <span class='precio d-flex justify-content-end'><strong>$ {$row -> value}</strong> / noche</span>
                            </div>

                            <div class='botones'>
                                <a href='{$updateRoute}' class='btn btnver'>editar</a>
                                <a href='{$detailRoute}' class='btn btnver'>ver</a>
                            </div>

                            <a href='{$deleteRoute}' name='botonEliminar'>
                                <div class='boton_delete material-icons'>
                                    close
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                ";
                echo $template;
            }
        ?>

    </article>
</main>