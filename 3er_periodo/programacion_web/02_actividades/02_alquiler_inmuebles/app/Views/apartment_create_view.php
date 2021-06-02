<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public/apartment">Apartamento</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agregar apartamento</li>
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
        <form class="row" method="POST" action="<?php echo base_url();?>/public/apartment/add-apartment" enctype="multipart/form-data">
            <!-- <div class="col-12 mb-3">
                <label for="idUser" class="form-label">User</label>
                <input type="number" class="form-control" id="idUser" name="idUser" maxlength="50">
            </div> -->
            <div class="col-12 mb-3">
                <label for="location" class="form-label">Localización</label>
                <input type="text" class="form-control" id="location" name="location" maxlength="50" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="address" name="address" maxlength="50" aria-describedby="emailHelp" required>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="country" class="form-label">País</label>
                <select class="form-select" name="country" id="country" aria-label="Selecciona tu País" required>
                    <option value="" selected>Selecciona tu país</option>
                    <?php
                    foreach ($country as $row) {
                        echo '<option value="' . $row["idCountry"] . '">' . $row["country"] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <select class="form-select" name="city" id="city" aria-label="Selecciona tu ciudad" required>
                    <option value="" selected>Selecciona tu ciudad</option>
                    <?php
                    foreach ($city as $row) {
                            echo '<option value="' . $row["idCity"] . '">' . $row["city"] . '</option>';
                    }
                    ?>
                </select>
            </div>
            
            <div class="col-12 col-md-6 mb-3">
                <label for="guest" class="form-label">Huéspedes</label>
                <select class="form-select" id="guest" name="guest" aria-label="Default select example" required>
                    <option selected>Cantidad de huéspedes</option>
                    <option value="1">Uno</option>
                    <option value="2">Dos</option>
                    <option value="3">Tres</option>
                    <option value="4">Cuatro</option>
                    <option value="5">Cinco</option>
                    <option value="6">Seis</option>
                    <option value="7">Siete</option>
                    <option value="8">Ocho</option>
                    <option value="9">Nueve</option>
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="rom" class="form-label">Habitaciones</label>
                <select class="form-select" id="rom" name="rom" aria-label="Default select example" required>
                    <option selected>Cantidad de habitaciones</option>
                    <option value="1">Uno</option>
                    <option value="2">Dos</option>
                    <option value="3">Tres</option>
                    <option value="4">Cuatro</option>
                    <option value="5">Cinco</option>
                    <option value="6">Seis</option>
                    <option value="7">Siete</option>
                    <option value="8">Ocho</option>
                    <option value="9">Nueve</option>
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="bed" class="form-label">Camas</label>
                <select class="form-select" id="bed" name="bed" aria-label="Default select example" required>
                    <option selected>Cantidad de camas</option>
                    <option value="1">Uno</option>
                    <option value="2">Dos</option>
                    <option value="3">Tres</option>
                    <option value="4">Cuatro</option>
                    <option value="5">Cinco</option>
                    <option value="6">Seis</option>
                    <option value="7">Siete</option>
                    <option value="8">Ocho</option>
                    <option value="9">Nueve</option>
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="bathroom" class="form-label">Baños</label>
                <select class="form-select" id="bathroom" name="bathroom" aria-label="Default select example" required>
                    <option selected>Cantidad de baños</option>
                    <option value="1">Uno</option>
                    <option value="2">Dos</option>
                    <option value="3">Tres</option>
                    <option value="4">Cuatro</option>
                    <option value="5">Cinco</option>
                    <option value="6">Seis</option>
                    <option value="7">Siete</option>
                    <option value="8">Ocho</option>
                    <option value="9">Nueve</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url google maps</label>
                <input type="url" class="form-control" id="url" name="url" maxlength="300" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="featured_image" class="form-label">Imagen destacada</label>
                <input type="file" class="form-control" id="featured_image" name="featured_image" required>
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Precio</label>
                <input type="number" class="form-control" id="value" name="value" min="1" max="99999999" aria-describedby="emailHelp" required>
            </div>
            <div class="form-floating padding_bottom">
                <textarea class="form-control" placeholder="Deja una reseña" id="review" name="review" maxlength="300" required></textarea>
                <label for="review">Descripción</label>
            </div>
            <button type="submit" class="btn button">Agregar apartamento</button>
        </form>
    </article>
</main>