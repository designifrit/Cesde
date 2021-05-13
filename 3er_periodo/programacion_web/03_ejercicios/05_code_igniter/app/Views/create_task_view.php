
<main id="main" class="container ">
    <article class="row">
        <form method="POST" action="<?php echo base_url();?>/public/add-task">
            <div class="mb-3">
                <label for="task" class="form-label">Tarea</label>
                <input type="text" class="form-control" id="task" name="task" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="imageUrl" class="form-label">Url Imagen</label>
                <input type="text" class="form-control" id="imageUrl" name="imageUrl">
            </div>
            <button type="submit" class="btn btn-primary">Crear tarea</button>
        </form>
    </article>
</main>