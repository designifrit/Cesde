
<main id="main" class="container ">
    <article class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
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
    </article>
</main>