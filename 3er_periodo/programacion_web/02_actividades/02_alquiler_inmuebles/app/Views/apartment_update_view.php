<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public/apartment">Apartamento</a></li>
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
        <form class="row" method="POST" action="<?php echo base_url();?>/public/apartment/update-apartment/update?id=<?php echo $apartment[0] -> idApartment?>" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="col-12 mb-3">
                <label for="location" class="form-label">Localización</label>
                <input type="text" class="form-control" id="location" name="location" maxlength="50" value="<?php echo $apartment[0] -> location ?>" required>
                <div id="locationHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="address" name="address" maxlength="50" value="<?php echo $apartment[0] -> address ?>" aria-describedby="emailHelp" required>
                <div id="addressHelp" class="form-text"></div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <label for="country" class="form-label">País</label>
                <select class="form-select" name="country" id="country" aria-label="Selecciona tu País" required>
                    <option value="" selected><?php echo $apartment[0] -> country ?></option>
                    <?php
                        foreach ($country as $row) {
                            echo '<option value="' . $row["idCountry"] . '">' . $row["country"] . '</option>';
                        }
                    ?>
                    <div id="countryHelp" class="form-text"></div>
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <select class="form-select" name="city" id="city" aria-label="Selecciona tu ciudad" required>
                    <option value="" selected><?php echo $apartment[0] -> city ?></option>
                    <?php
                        foreach ($city as $row) {
                            echo '<option value="' . $row["idCity"] . '">' . $row["city"] . '</option>';
                        }
                    ?>
                    <div id="cityHelp" class="form-text"></div>
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="guest" class="form-label">Huéspedes</label>
                <select class="form-select" id="guest" name="guest" min="1" max="9" aria-label="Default select example" required>
                    <option value="<?php echo $apartment[0] -> guest ?>" selected>Cantidad de huéspedes <?php echo $apartment[0] -> guest ?></option>
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
                <div id="guestHelp" class="form-text"></div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="rom" class="form-label">Habitaciones</label>
                <select class="form-select" id="rom" name="rom" min="1" max="9" aria-label="Default select example" required>
                    <option value="<?php echo $apartment[0] -> rom ?>" selected>Cantidad de habitaciones <?php echo $apartment[0] -> rom ?></option>
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
                <div id="romHelp" class="form-text"></div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="bed" class="form-label">Camas</label>
                <select class="form-select" id="bed" name="bed" min="1" max="9" aria-label="Default select example" required>
                    <option value="<?php echo $apartment[0] -> bed ?>" selected>Cantidad de camas <?php echo $apartment[0] -> bed ?></option>
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
                <div id="bedHelp" class="form-text"></div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="bathroom" class="form-label">Baños</label>
                <select class="form-select" id="bathroom" name="bathroom" min="1" max="9" aria-label="Default select example" required>
                    <option value="<?php echo $apartment[0] -> bathroom ?>" selected>Cantidad de baños <?php echo $apartment[0] -> bathroom ?></option>
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
                <div id="bathroomHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url google maps</label>
                <input type="url" class="form-control" id="url" name="url" maxlength="300" value="<?php echo $apartment[0] -> url ?>" aria-describedby="emailHelp" required>
                <div id="urlHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="featured_image" class="form-label">Imagen destacada</label>
                <input type="file" class="form-control" id="featured_image" name="featured_image" required>
                <div id="imageHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Precio</label>
                <input type="number" class="form-control" id="value" name="value" min="1" max="99999999" value="<?php echo $apartment[0] -> value ?>" aria-describedby="emailHelp" required>
                <div id="valueHelp" class="form-text"></div>
            </div>
            <div class="form-floating padding_bottom">
                <textarea class="form-control" placeholder="Deja una reseña" id="review" name="review" maxlength="300" value="<?php echo $apartment[0] -> review ?>" required></textarea>
                <label for="review">Descripción</label>
                <div id="reviewHelp" class="form-text"></div>
            </div>
            
            <button type="submit" class="btn button" onclick="validation()">Actualizar información</button>
            <a href="<?php echo base_url();?>/public/apartment" class="btn button cancel" style="margin-left:1rem; border:none;">Cancelar</a>
        </form>
    </article>
</main>

<script>
    function validation() {
        var inputLocation = document.getElementById("location");
        var inputAddress = document.getElementById("address");
        var inputCountry = document.getElementById("country");
        var inputCity = document.getElementById("city");
        var inputGuest = document.getElementById('guest');
        var inputRom = document.getElementById("rom");
        var inputBed = document.getElementById("bed");
        var inputBathroom = document.getElementById("bathroom");
        var inputUrl = document.getElementById("url");
        var inputImage = document.getElementById("featured_image");
        var inputValue = document.getElementById("value");
        var inputReview = document.getElementById("review");

        if(!inputLocation.checkValidity()){
            document.getElementById("locationHelp").innerHTML = inputLocation.validationMessage;
        }else{
            document.getElementById("locationHelp").innerHTML = "";
        }

        if(!inputAddress.checkValidity()){
            document.getElementById("addressHelp").innerHTML = inputAddress.validationMessage;
        }else{
            document.getElementById("addressHelp").innerHTML = "";
        }

        if(!inputCountry.checkValidity()){
            document.getElementById("countryHelp").innerHTML = inputCountry.validationMessage;
        }else{
            document.getElementById("countryHelp").innerHTML = "";
        }

        if(!inputCity.checkValidity()){
            document.getElementById("cityHelp").innerHTML = inputCity.validationMessage;
        }else{
            document.getElementById("cityHelp").innerHTML = "";
        }

        if(!inputGuest.checkValidity()){
            document.getElementById("guestHelp").innerHTML = inputBed.validationMessage;
        }else{
            document.getElementById("guestHelp").innerHTML = "";
        }

        if(!inputRom.checkValidity()){
            document.getElementById("romHelp").innerHTML = inputRom.validationMessage;
        }else{
            document.getElementById("romHelp").innerHTML = "";
        }

        if(!inputBed.checkValidity()){
            document.getElementById("bedHelp").innerHTML = inputBed.validationMessage;
        }else{
            document.getElementById("bedHelp").innerHTML = "";
        }

        if(!inputBathroom.checkValidity()){
            document.getElementById("bathroomHelp").innerHTML = inputBathroom.validationMessage;
        }else{
            document.getElementById("bathroomHelp").innerHTML = "";
        }

        if(!inputUrl.checkValidity()){
            document.getElementById("urlHelp").innerHTML = inputUrl.validationMessage;
        }else{
            document.getElementById("urlHelp").innerHTML = "";
        }

        if(!inputImage.checkValidity()){
            document.getElementById("imageHelp").innerHTML = inputImage.validationMessage
        }else{
            document.getElementById("imageHelp").innerHTML = "";
        }

        if (isNaN(inputValue) || inputValue < 10000) {
            document.getElementById("valueHelp").innerHTML = "La entrada no es válida";
        }else{
            document.getElementById("valueHelp").innerHTML = "";
        }

        if(!inputReview.checkValidity()){
            document.getElementById("reviewHelp").innerHTML = inputReview.validationMessage;
        }else{
            document.getElementById("reviewHelp").innerHTML = "";
        }
    }
</script>