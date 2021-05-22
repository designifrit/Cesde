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
                <label for="country" class="form-label">País</label>
                <select class="form-select" name="country" id="country" aria-label="Default select example">
                    <option value="" selected>Selecciona tu país</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <select class="form-select" name="city" id="city" aria-label="Default select example">
                    <option value="" selected>Selecciona tu ciudad</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="url" name="url" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="url_map" class="form-label">Url google maps</label>
                <input type="url" class="form-control" id="url_map" name="url_map" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="roms" class="form-label">Habitaciones</label>
                <input type="number" class="form-control" id="roms" name="roms" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="featured_image" class="form-label">Imagen destacada</label>
                <input type="file" class="form-control" id="featured_image" name="featured_image">
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Precio</label>
                <input type="number" class="form-control" id="value" name="value" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-floating padding_bottom">
                <textarea class="form-control" placeholder="Deja una reseña" id="review"></textarea>
                <label for="review">Comments</label>
            </div>
            <button type="submit" class="btn button">Agregar propiedad</button>
        </form>
    </article>
</main>