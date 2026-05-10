<?php
require_once("conexion.php");


//operacion CREATE del CRUD
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $nombres = ($_POST["nombres"] ?? "");
    $correo = ($_POST["correo"] ?? "");
    $telefono = ($_POST["telefono"] ?? "");
    $direcccion = ($_POST["direcccion"] ?? "");

    $query = $conn->prepare("INSERT INTO usuarios (nombres, correo, telefono, direcccion) VALUES (:nombres, :correo, :telefono, :direcccion)");

    $query->bindParam(":nombres", $nombres);
    $query->bindParam(":correo", $correo);
    $query->bindParam(":telefono", $telefono);
    $query->bindParam(":direcccion", $direcccion);

    $query->execute();

    header("Location: index.php");

    exit;
    
}
   
//Fin de operacion CREATE del CRUD  

?>


<!doctype html>
<html lang="en">

    <head>
        <title>APLICACION USUARIOS</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"/>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container">
        <br><br>
        <h1 class="text-center">APLICACION USUARIOS</h1>
        <h3 class="text-center">Creacion de usuarios (CREATE)</h3>
        <br><br>
        <form action="" method="post">

            <div class="mb-3">
                <label for="nombres" class="form-label">Nombre</label> 
                <input type="text"class="form-control"name="nombres"id="nombres"aria-describedby="helpId"
                placeholder="Digite su nombre completo con sus dos apellidos"/>
                </div>

                 <div class="mb-3">
                <label for="correo" class="form-label">Correo</label> 
                <input type="email"class="form-control"name="correo"id="correo"aria-describedby="helpId"
                placeholder="Digite su correo electrónico"/>
                </div>

                <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label> 
                <input type="tel"class="form-control"name="telefono"id="telefono"aria-describedby="helpId"
                placeholder="Digite su número de teléfono"/>
                </div>

                <div class="mb-3">
                <label for="direcccion" class="form-label">Dirección</label> 
                <input type="text"class="form-control"name="direcccion"id="direcccion"aria-describedby="helpId"
                placeholder="Digite su dirección completa"/>
                </div>

            <div class="text-center">
                <br>
               <button type="submit"class="btn btn-primary">
                Crear
               </button>
               <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
               
               
            </div>
        
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
