<?php

session_start();

include'../conexion db/db.php';

  
$usuario = $_SESSION['nombre'];
if(!isset($usuario )){

    echo'<script type="text/javascript">
    alert("Debe de iniciar seccion para aceder a este sito");
    window.location.href="../logins/login.html"
    </script>';

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
    <link rel="stylesheet" type=" text/css" href="../assets/css/style pasantes activos.css" media="screen">
     <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <title>Pasantes activos</title>


    <link rel="icon" href="../assets/img/social-icon.ico">
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
                    <li class="nav-item"> <a class="nav-link " href="../logins/cerrar.php"> Cerrar sección </a> </li>
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
                    <h1 class="h2">Registrar pasante</h1>

                    <p>
                        <a href="registrar pasante.php" class="btn btn-primary my-2">
                            <font style="vertical-align: inherit;">
                                <font style=" vertical-align: inherit;">Registrar</font>
                            </font>
                        </a>
                    </p>
                </div>
                <h2>Pasantes activos</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="tablax">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Cédula</th>
                                <th scope="col">Universidad</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Dónde vives</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Actualizar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conexion = mysqli_connect("localhost", "id17960999_pasantes_alpha", "W#~fUq9]sQ0kLo[#", "id17960999_pasantes_alpha_db");
                            $sql = "SELECT Id_formulario,Nombre,Apellido,Cedula,Universidad,Telefono,Direccion,Donde_Vives,Correo FROM formulario";
                            $resultado = mysqli_query($conexion, $sql);
                            while ($mostrar = mysqli_fetch_row($resultado)) {
                            ?>
                                <tr>
                                    <td><?php echo $mostrar['0'] ?></td>
                                    <td><?php echo $mostrar['1'] ?></td>
                                    <td><?php echo $mostrar['2'] ?></td>
                                    <td><?php echo $mostrar['3'] ?></td>
                                    <td><?php echo $mostrar['4'] ?></td>
                                    <td><?php echo $mostrar['5'] ?></td>
                                    <td><?php echo $mostrar['6'] ?></td>
                                    <td><?php echo $mostrar['7'] ?></td>
                                    <td><?php echo $mostrar['8'] ?></td>

                                    <td><a href="../assets/php/editar/editar pasantes activos.php?
                                        id=<?php echo $mostrar['0'] ?> &
                                        nombre=<?php echo $mostrar['1'] ?> &
                                        apellido=<?php echo $mostrar['2'] ?> &
                                        cedula=<?php echo $mostrar['3'] ?> &
                                        universidad=<?php echo $mostrar['4'] ?> &
                                        telefono=<?php echo $mostrar['5'] ?> &
                                        direccion=<?php echo $mostrar['6'] ?> &
                                        donde_vives=<?php echo $mostrar['7'] ?> &
                                        correo=<?php echo $mostrar['8'] ?> &
                                                                    
                                    " button class="btn btn-edit"><i class="fas fa-edit"></i></a></button></td>
                                    <td><a href="../assets/php/borrar/eliminar pasantes activos.php? id=<?php echo $mostrar['0'] ?> " button class="btn btn-danger"><i class="fas fa-trash"></i></a></button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


    <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
              
                lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
            });
    });
</script>

</body>

</html>