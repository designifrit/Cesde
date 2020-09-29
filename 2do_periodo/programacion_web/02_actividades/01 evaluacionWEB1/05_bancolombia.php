
<?php /*Bancolombia contrata sus servicios de desarrollador para realizar un programa en PHP que permita:
    - Almacenar en variables información de nombre, teléfono dirección y salario de 5 usuarios de una sucursal llamada sucursal A.
    - Sumar todos los salarios de los usuarios de la sucursal A en una sola variable llamada $sumatoriaSalarios y así poder comparar dicho valor con las sucursales B cuyo valor de salarios mensuales es de 40.000.000 y la sucursal C cuyo valor de salarios mensuales es de 32.000.000.
Permita que su código muestre cual sucursal tiene la mejor sumatoria de salarios y además muestre en pantalla la información completa de los 5 usuarios de la sucursal A*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <header class="row" id="header">
        <nav class="col" id="nav">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="row" id="section">
        <div class="col">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</div>

</body>
</html>