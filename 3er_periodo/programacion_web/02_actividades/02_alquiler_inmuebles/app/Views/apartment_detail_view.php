<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public/apartment">Apartamento</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detalle del apartamento</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<main id="main" class="container ">
    <article>
        <div class="row">
            <h2>Detalle del apartamento</h2>
            <p><span class="material-icons">star_rate</span> <?php echo $apartment -> country?> • <?php echo $apartment -> city?></p>
        </div>
        <section class="row apto-gallery padding_bottom">
            <div class="col-12 col-sm-8">
                <img src="<?php echo $apartment -> photo?>" alt="gallery">
            </div>
            <div class="col-12 col-sm-4">
                <img src="<?php echo $apartment -> photo?>" alt="gallery">
                <img src="<?php echo $apartment -> photo?>" alt="gallery">
            </div>
        </section>
        <section id="detail" class="row">
            <div class="col-12 col-md-7 col-lg-8">
                <div class="mcontent_bottom">
                    <h3><?php echo $apartment -> location?></h3>
                    <i class="ticket"><span class="material-icons">people_outline</span><?php echo $apartment -> guest?> huéspedes</i><i class="ticket"><span class="material-icons">other_houses</span><?php echo $apartment -> rom?> habitaciones</i><i class="ticket"><span class="material-icons">bed</span><?php echo $apartment -> bed?> camas</i><i class="ticket"><span class="material-icons">shower</span><?php echo $apartment -> bathroom?> baños</i>
                    <p class="mt-3 pcolor"><?php echo $apartment -> address?></p>
                </div>
                <hr>
                <div class="mcontent_top">
                    <p><?php echo $apartment -> review?></p>
                    <span class="material-icons">
                        place<a href="<?php echo $apartment -> url?>" class="mapa" target="_blank">ver ubicación en el mapa</a>
                    </span>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">$<?php echo $apartment -> value?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">/ noche</h6>

                        <div class="form-group row mt-3">
                            <label for="arrivaldate" class="col-4 col-form-label">Llegada</label>
                            <div class="col-8">
                                <input class="form-control" type="date" id="arrivaldate">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="departuredate" class="col-4 col-form-label">Salida</label>
                            <div class="col-8">
                                <input class="form-control" type="date" id="departuresate">
                            </div>
                        </div>

                        <?php
                            if(){
                                $template = "
                                    
                                ";
                                echo $template;
                            }else{
                                $template = "

                                ";
                                echo $template;
                            }
                        ?>

                        <div class="mcontent_top">
                            <a href="#" class="btn btnreserva">reservar</a>
                        </div>

                        <div class="mcontent_top">
                            <a href="#" class="btn btn-secondary btn-lg disabled btnreservado" tabindex="-1" role="button" aria-disabled="true">Reservado</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>