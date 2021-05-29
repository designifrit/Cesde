
    <header id="header" class="container-fluid">
        <div class="row">
            <div id="slider">
                <figure>
                    <img src="<?php echo base_url();?>/public/assets/img/house_1.jpg" alt="Fotografia modelo">
                    <img src="<?php echo base_url();?>/public/assets/img/house_2.jpg" alt="Fotografia modelo">
                    <img src="<?php echo base_url();?>/public/assets/img/house_3.jpg" alt="Fotografia modelo">
                    <img src="<?php echo base_url();?>/public/assets/img/house_4.jpg" alt="Fotografia modelo">
                    <img src="<?php echo base_url();?>/public/assets/img/house_1.jpg" alt="Fotografia modelo">
                </figure>
            </div>
            <div>
                <a href="#" class="btn button">¡Déjate llevar!</a>
            </div>
        </div>
    </header>

    <main id="main" class="container">
        <article class="row">
            <div class="col-12">
                <h2>Escápate a tu próximo destino</h2>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="escapate"></div>
                <span class="escapate">
                    <span><strong>Cartagena</strong></span>
                    <span>horas</span>
                </span>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="escapate"></div>
                <span class="escapate">
                    <span><strong>Santa Marta</strong></span>
                    <span>horas</span>
                </span>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="escapate"></div>
                <span class="escapate">
                    <span><strong>Rionegro</strong></span>
                    <span>horas</span>
                </span>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="escapate"></div>
                <span class="escapate">
                    <span><strong>Manizales</strong></span>
                    <span>horas</span>
                </span>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="escapate"></div>
                <span class="escapate">
                    <span><strong>Pereira</strong></span>
                    <span>horas</span>
                </span>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="escapate"></div>
                <span class="escapate">
                    <span><strong>San Jerónimo</strong></span>
                    <span>horas</span>
                </span>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="escapate"></div>
                <span class="escapate">
                    <span><strong>Medellín</strong></span>
                    <span>horas</span>
                </span>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="escapate"></div>
                <span class="escapate">
                    <span><strong>Pereira</strong></span>
                    <span>horas</span>
                </span>
            </div>
        </article>

        <article class="row elige">
            <div class="col-12">
                <h2>Apartamentos destacados</h2>
            </div>

            <?php
                foreach($apartments as $row){
                    // Se asigna la ruta: base_url + la vista: delete-task + el dato que necesitamos traer: id
                    // Esos datos quedan almacenados en la URL y con PHP se traen para disponer de estos
                    $detailRoute = base_url()."/public/apartment/detail-apartment?id={$row -> idApartment}";
                    
                    $template = "
                    <div class='col-12 col-sm-6 col-md-3'>
                        <a href='{$detailRoute}'>
                            <img class='fill' src='{$row -> photo}' alt='lease'>
                        </a>
                        <span>{$row -> location}</span>
                        <small>{$row -> city} {$row -> country}</small>
                    </div>";
                    echo $template;
                }
            ?>
        </article>

        <article class="row elige padding_bottom">
            <div class="col-12">
                <h2>Elige cualquier lugar del mundo</h2>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-6">
                <img class="fill" src="<?php echo base_url();?>/public/assets/img/house_5.jpg" alt="lease">
                <span>Alojamientos en viviendas modernas</span>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <img class="fill" src="<?php echo base_url();?>/public/assets/img/house_6.jpg" alt="lease">
                <span>Casas al aire libre</span>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <img class="fill" src="<?php echo base_url();?>/public/assets/img/house_7.jpg" alt="lease">
                <span>Para reuniones familiares</span>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                <img class="fill" src="<?php echo base_url();?>/public/assets/img/house_8.jpg" alt="lease">
                <span>Con parquedaero amplio</span>
            </div>
        </article>
    </main>

    <aside id="aside" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Actividades únicas con expertos locales, en persona o en línea</h2>
            </div>
        </div>
    </aside>
