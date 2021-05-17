
<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
            <?php
                foreach($tasks as $item){
                    // Se asigna la ruta: base_url + la vista: delete-task + el dato que necesitamos traer: id
                    // Esos datos quedan almacenados en la URL y con PHP se traen para disponer de estos
                    $deleteRoute = base_url()."/public/delete-task?id={$item -> id}";
                    $updateRoute = base_url()."/public/update-task?id={$item -> id}";

                    // Plantilla para las tarjetas Tasks
                    $template = "
                        <div class='col'>
                            <div class='card' style='width: 18rem;'>
                                <img src='{$item -> image_url}' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$item -> task}</h5>
                                    <p class='card-text'>{$item -> description}</p>
                                    <a href='{$deleteRoute}' class='btn btn-danger button'>delete</a>
                                    <a href='{$updateRoute}' class='btn btn button'>update</a>
                                </div>
                            </div>
                        </div>
                    ";
                    echo $template;
                }

                // echo "Tarea: {$task -> name} - Description: {$task -> description} - Fecha: {$task -> date}";
            ?>
        </div>
    </article>
</main>