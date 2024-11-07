<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FisioTeca | Iniciar Sesión</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
<body>




<section>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-7 col-md-6 m-auto">
                <h2>FisioTeca</h2>
                <form action="form" method="post">
                    <label for="inputEmail">Correo</label>
                    <input type="email" name="email_login" id="email_login" class="form-control" required="">
                    <label for="inputPassword">Contraseña</label>
                    <input type="password" name="password_login" id="password_login" class="form-control" required="">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Ingresar" />
                </form>
                <p>Registrate <a href="RegisterView">Aqui</a> </p>
            </div>
        </div>     
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>