<?php
session_start();

           include'../conexion db/db.php';
           
           $usuario = $_SESSION['nombre'];
           if(!isset($usuario)){
           
         echo'<script type="text/javascript">
    alert("Debe de iniciar seccion para aceder a este sito");
    window.location.href="../logins/login.html"
    </script>';
           
           }
           
include '../assets/php/ayuda/utilidad recurso.php';



$_SESSION['pasantes'] = isset($_SESSION['pasantes']) ? $_SESSION['pasantes'] : array();

$listadoEstudiantes = $_SESSION['pasantes'];

if (!empty($listadoEstudiantes)) {

    if (isset($_GET['$grupoId'])) {


        $listadoEstudiantes = searchProperty($listadoEstudiantes, 'grupo', $_GET['grupoId']);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style recursos.css" media="screen">

    <!-- Title -->
    <title>Recursos</title>

    <!-- Social icon for the website -->
    <link rel="icon" href="../assets/img/social-icon.ico">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0f48d8c00d.js"></script>
</head>

<body>
    
    
    
    <nav class="navbar navbar-dark bg-dark  fixed-top ">
        <div class="container">
            <a href="#" class="navbar-brand">
                <strong>AILogic</strong>
            </a>

            <button type="button" class="navbar-toggler d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menú de navegación">
               <span class="navbar-toggler-icon"></span>
            </button>

             <div class="collapse navbar-collapse  d-md-none" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link " href="pasantes activos.php"> Pasantes activos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="informacion de evaluaciones pasantes.php"> Información de evaluaciones pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="seguimiento de recursos.php"> Seguimiento de recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="recursos.html"> Recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="asignaciones administrador.php"> Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="grupos administrador.php"> Grupos </a> </li>
                <li class="nav-item"> <a class="nav-link " href="../pasantes/pasantes.php"> Pasantes </a> </li>
                <li class="nav-item"> <a class="nav-link " href="chat/chatpage.php">Chat</a> </li>
                <li class="nav-item"> <a class="nav-link " href="enviar correo.php"> Enviar correo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../logins/cerrar.php"> Cerrar sección</a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="pasantes activos.php">
                                <span data-feather="home">Pasantes activos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="informacion de evaluaciones pasantes.php">
                                <span data-feather="file"></span>Información de evaluaciones pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="seguimiento de recursos.php">
                                <span data-feather="bar-chart-2"></span> Seguimiento de recursos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recursos.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="asignaciones administrador.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="grupos administrador.php">
                            <span data-feather="layers"></span>Grupos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../pasantes/pasantes.php">
                            <span data-feather="layers"></span>Pasantes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chat/chatpage.php">
                            <span data-feather="layers"></span>Chat
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="enviar correo.php">
                            <span data-feather="layers"></span>Enviar correo
                        </a>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../logins/cerrar.php">
                                <span data-feather="layers"></span>Cerrar sección
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Recursos</h1>
                </div>

                <main role="main">
                <p>
                    <a href="../assets/php/insertar/add recursos.php" class="btn btn-primary my-2">
                        <font style="vertical-align:  inherit;">
                            <font style="vertical-align: inherit;">
                                Crear recurso                   
                            </font>
                        </font>
                    </a>
                </p>
                <hr class="my-4">

                <div class="row mb-1">

                    <?php if (empty($listadoEstudiantes)) : ?>
                    <?php else : ?>
                        <?php foreach ($listadoEstudiantes as $estudiante) :  ?>

                            <div class="card mx-2 my-2">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $estudiante['nombre']; ?>
                                    </h5>

                                    <p class="card-text">
                                        <?php echo $estudiante['descripcion']; ?>
                                    </p>


                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?php echo  getGrupoName($estudiante['grupo']); ?>
                                    </h6>
                                    <p class="card-text">
                                        <?php echo $estudiante['recurso']; ?>
                                    </p>

                                   <a href="../assets/php/editar/editar recursos.php?id=<?php echo $estudiante['id']; ?> " class="card-link">Editar</a>                        

                                   <a href="../assets/php/borrar/eliminar recursos.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Borrar</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </main>
            </main>
        </div>
    </div>

        
    <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>