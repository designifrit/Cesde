
    <footer class="container" id="footer">
        <div class="row">
            <div class="col-12 col-sm-4 navmap">
                <h5>Atención Cliente</h5>
                <ul>
                    <li><a href="create.php">Create</a></li>
                    <li><a href="update.php">Update</a></li>
                    <li><a href="delete.php">Delete</a></li>
                    <li><a href="#">Sobre nosotros</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4 navmap">
                <h5>Sobre</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, deleniti itaque rerum tempore laboriosam voluptates aliquam quasi dolorum iure, quod officia provident mollitia illum, recusandae qui expedita necessitatibus neque veritatis.</p>
            </div>
            <div class="col-12 col-sm-4 navmap">
                <h5>Newsletter</h5>
                <p><em>Únete a nuestro correo promocional</em></p>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <input type="email" name="suscribe" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="correo">
                        <button type="button" class="btn">enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col rights">
                <h6>Todos los derechos reservados © Alejandro Orozco ❤</h6>
            </div>
        </div>
    </footer>

    <script src="<?php echo base_url();?>/public/assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>/public/assets/js/script.js"></script>

</body>
</html>