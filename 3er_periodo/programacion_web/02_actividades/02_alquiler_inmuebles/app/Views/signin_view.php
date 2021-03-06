<header id="header" class="header_image">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>/public">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
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
            <h2>Inicia sesión</h2>
        </div>
        
        <form method="POST" action="<?php echo base_url();?>/public/signin/login">
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                <div id="emailHelp" class="form-text">Respetamos tu privacidad, nunca compartimos tus datos con nadie.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" maxlength="40" required>
                <div id="passwordHelp" class="form-text"></div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="recordarme" name="recordarme">
                <label class="form-check-label" for="recordarme">Recordarme</label>
            </div>
            <button type="submit" class="btn button mt-3" onclick="validation()">Ingresar</button>
        </form>
    </article>
</main>

<script>
    function validation() {
        var inputEmail = document.getElementById("email");
        var inputPassword = document.getElementById("password");

        if(!inputEmail.checkValidity()){
            document.getElementById("emailHelp").innerHTML = inputEmail.validationMessage;
        }else{
            document.getElementById("emailHelp").innerHTML = "";
        }

        if(!inputPassword.checkValidity()){
            document.getElementById("passwordHelp").innerHTML = inputPassword.validationMessage;
        }else{
            document.getElementById("passwordHelp").innerHTML = "";
        }
    }
</script>