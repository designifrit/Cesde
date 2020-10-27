
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="php.svg" width="40" class="d-inline-block align-top" alt="" loading="lazy">
        Programación web
        </a>
    </nav>

    <main>
        <div class="container">
            <div class="row">
            
            <?php
                $documentos = [
                    array("Alejandro", "Orozco", 34, 12364569),
                    array("Jorge", "Orozco", 34, 75125545),
                    array("Juliana", "Chavarriaga", 32, 665426585),
                    array("Angelo", "Orozco", 6, 414125251)
                ];
            ?>

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Cédula</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($documentos as $array):?>
                        <tr>
                            <th><?php echo($array[0]) ?></th>
                            <td><?php echo($array[1]) ?></td>
                            <td><?php echo($array[2]) ?></td>
                            <td><?php echo($array[3]) ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>

            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
