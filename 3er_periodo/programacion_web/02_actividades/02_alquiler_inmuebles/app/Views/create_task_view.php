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
            <h2>Agregar apartamento</h2>
        </div>
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
            <button type="submit" class="btn button">Crear tarea</button>
        </form>
    </article>
</main>