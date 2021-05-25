<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Actualizar apartamento</li>
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
            <h2>Actualizar información del apartamento</h2>
        </div>
        <form class="row" method="POST" action="<?php echo base_url();?>/public/update-apartment?id=<?php echo $apartment -> id_apartment?>">
            <div class="col-12 mb-3">
                <label for="name" class="form-label">Breve descripción</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $apartment -> name; ?>" maxlength="50">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="country" class="form-label">País</label>
                <select class="form-select" name="country" id="country" aria-label="Selecciona tu País">
                    <option value="<?php echo $apartment -> name_country; ?>" selected><?php echo $apartment -> name_country ?></option>
                    
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <select class="form-select" name="city" id="city" aria-label="Selecciona tu ciudad">
                    <option value="<?php echo $apartment -> name_city; ?>" selected><?php echo $apartment -> name_city ?></option>
                    
                </select>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $apartment -> address; ?>" maxlength="90" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="coordinates" class="form-label">Url google maps</label>
                <input type="url" class="form-control" id="coordinates" name="coordinates" value="<?php echo $apartment -> coordinates; ?>" maxlength="300" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="roms" class="form-label">Habitaciones</label>
                <input type="number" class="form-control" id="roms" name="roms" value="<?php echo $apartment -> roms; ?>" min="1" max="20" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="featured_image" class="form-label">Imagen destacada</label>
                <input type="file" class="form-control" id="featured_image" name="featured_image" value="<?php echo $apartment -> id_image; ?>">
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Precio</label>
                <input type="number" class="form-control" id="value" name="value" value="<?php echo $apartment -> value; ?>" min="1" max="99999999" aria-describedby="emailHelp">
            </div>
            <div class="form-floating padding_bottom">
                <textarea class="form-control" placeholder="Deja una reseña" id="review" name="review" value="<?php echo $apartment -> review; ?>" maxlength="400"></textarea>
                <label for="review">Descripción</label>
            </div>
            <button type="submit" class="btn button">Actualizar información</button>
            <a href="<?php echo base_url();?>/public/apartment" class="btn button cancel" style="margin-left:1rem;">Cancelar</a>
        </form>
    </article>
</main>