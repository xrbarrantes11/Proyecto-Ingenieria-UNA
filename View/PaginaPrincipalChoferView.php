<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal Chofer</title>
    </link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="../js/FunctionProyecto.js"></script>

    <?php
        include '../Business/GiraBusiness.php';
    ?>
</head>
<style>
  thead th {
  color: #fff;
}
</style>
    <nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark" style="background-color: #302E71" aria-label="Navegación principal" _mstaria-label="441961">
        <div class="container-fluid">
            <a class="navbar-brand" href="./PaginaPrincipalChoferView.php">
            <img src="../Images/LOGO-UNAHorizontal-BLANCO .png" alt="logo" width="200px">
            </a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="360672" _mstaria-label="320099">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbar" style="font-size: 1rem">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="javascript:CerrarSesion()" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="arrow-back-circle-sharp"></ion-icon> Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </br></br>
<center>
    <div style="background-color: #302E71">
        <br>
        <h4 style="color: white">Sistema Gestión de Transportes</h4>
        <h5 style="color: white">Módulo de Chofer</h5>
        <br>
    </div>
</center>
<body>
        <br><br>
        <div class="container-lg">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar" _mstplaceholder="76154" _mstaria-label="76154">
                <button class="btn btn-outline-success" type="submit" _msthash="1202799" _msttexthash="76154">Buscar</button>
            </form>
        </div>
        <br>
        <div class="container">
            <table border="2"  class="table table-striped">
                <thead style="background-color: #302E71;">
                <tr>
                    <th>Nombre de Encargado</th>
                    <th>Fecha Solicitud</th>
                    <th>Fecha de Gira</th>
                    <th>Carrera</th>
                    <th>Tipo de Gira</th>
                    <th>Itinerario</th>
                    <th>Reportes</th>
                </tr>
                </thead>
                <tbody id="buscar"> 
                <?php
                    $GiraBusiness = new GiraBusiness();
                    $allGiras = $GiraBusiness->getAllGira();
                    foreach ($allGiras as $current) {
                        echo '<form method="post" enctype="multipart/form-data" action="../business/GiraAction.php">';
                        echo '<tr>';
                        echo '<input type="hidden" name="tbgiraid" value="' . $current->getGiraId() . '">';
                        echo '<td><input type="text" readonly name="tbgiranombreencargado" id="tbgiranombreencargado" value="' . $current->getGiraNombreEncargado() . '"/></td>';
                        echo '<td><input type="date" readonly name="tbgirafechasolicitud" id="tbgirafechasolicitud" value="' . $current->getGiraFechaSolicitud() . '"/></td>';
                        echo '<td><input type="date" readonly name="tbgirafechagira" id="tbgirafechagira" value="' . $current->getGiraFechaGira() . '"/></td>';
                        echo '<td><input type="text" readonly name="tbgiracarrera" id="tbgiracarrera" value="' . $current->getGiraCarrera() . '"/></td>';
                        echo '<td><input type="text" readonly name="tbgiratipogira" id="tbgiratipogira" value="' . $current->getGiraTipoGira() . '"/></td>';
                        echo '<td><input type="submit" class="material-symbols-outlined" value="visibility" name="ver" id="ver"/></td>';
                        echo '<td><input type="submit" class="material-symbols-outlined" value="add" name="reporte" id="ver"/></td>';
                        echo '</tr>';
                        echo '</form>';
                    }
                ?>
                </tbody>
            </table>
            <br>
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Siguiente</a>
                </li>
            </ul>
        </nav>
        </div>
        <br>
</body>
</html>