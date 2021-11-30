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


?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style grupos pasantes.css" media="screen">
    <title>Grupos</title>
    <link rel="icon" href="../assets/img/social-icon.ico">
</head>

<body class="body">

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
                <li class="nav-item"> <a class="nav-link " href="pasantes.php"> Pasantes </a> </li>
                <li class="nav-item"> <a class="nav-link " href="asignaciones pasantes.php">Asignaciones</a> </li>
                <li class="nav-item"> <a class="nav-link " href="grupos pasantes.php"> Grupo </a> </li>
                <li class="nav-item"> <a class="nav-link " href="recursos pasantes.php"> Recurso</a> </li>
                <li class="nav-item"> <a class="nav-link " href="chat/chatpage.php"> Chat </a> </li>
                <li class="nav-item"> <a class="nav-link " href="../logins/cerrar.php">Cerrar sección</a> </li>
            </ul>
        </div>
    </div>
</nav>

<div class="asignaciones mt-5 px-3">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="pasantes.php">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="asignaciones pasantes.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="grupos pasantes.php">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recursos pasantes.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chat/chatpage.php">
                                <span data-feather="layers"></span>Chat
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
                    <h1 class="h2">Grupos</h1>
                </div>


                <div class="container px-4 py-5" id="custom-cards">


                    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                        <div class="col mb-3">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo ALPHA</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                            <small><a href="../assets/php/informacion y creacion/detalles grupo pasantes alpha.php">Informacion del grupo</a></small>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-3">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo BETA</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                            <small><a href="../assets/php/informacion y creacion/detalles grupo pasantes beta.php">Informacion del grupo</a></small>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-3">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo CENTRAL</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                            <small><a href="../assets/php/informacion y creacion/detalles grupo pasantes central.php">Informacion del grupo</a></small>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div class="col mb-3">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo DELTA</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small><a href="../assets/php/informacion y creacion/detalles grupo pasantes delta.php">Informacion del grupo</a></small>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-3">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo ELECON</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small><a href="../assets/php/informacion y creacion/detalles grupo pasantes elecon.php">Informacion del grupo</a></small>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-3">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Grupo FALCON</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="../assets/img/social-icon.ico" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                        <small><a href="../assets/php/informacion y creacion/detalles grupo pasantes falcon.php">Informacion del grupo</a></small>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

        <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
        <script src="../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
    
</body>

</html>