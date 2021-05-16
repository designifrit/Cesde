
<main id="main" class="container ">
    <article class="row">
        <form method="POST" action="<?php echo base_url();?>/public/add-task" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="task" class="form-label">Tarea</label>
                <input type="text" class="form-control" id="task" name="task" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="imageTask" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imageTask" name="imageTask">
            </div>
            <button type="submit" class="btn btn-primary">Crear tarea</button>
        </form>
    </article>
</main>