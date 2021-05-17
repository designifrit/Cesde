
<main id="main" class="container ">
    <article class="row">
        <form method="POST" class="padding_top" action="<?php echo base_url();?>/public/update-task?id=<?php echo $task -> id ?>">
            <div class="mb-3">
                <label for="task" class="form-label">Tarea</label>
                <input type="text" class="form-control" id="task" name="task" value="<?php echo $task -> task; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php echo $task -> description; ?>">
            </div>
            <div class="mb-3">
                <label for="imageUrl" class="form-label">Url Imagen</label>
                <input type="text" class="form-control" id="imageUrl" name="imageUrl" value="<?php echo $task -> image_url; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar tarea</button>
        </form>
    </article>
</main>