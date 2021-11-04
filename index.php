<!DOCTYPE html>
<html>
    <head>
        <link href="./estilos/estilo.css" rel="stylesheet" type="text/css">
        <script src="./scrips/consultas.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="iconLogo">
            <a href="index.php"><img src="./imagenes/LogoTecnoACCV1.png" width="200px" height="70px"></a>
            </div>

            <div class="menuHeader">
                <ul class="nav">
                    <li><a onclick="mostrarProductos()">Categorias</a>
                        <ul>
                            <li><a onclick="mostrarCargadores()">Cargadores</a></li>
                            <li><a onclick="mostrarFundas()">Fundas</a></li>
                            <li><a onclick="mostrarProtectoresPantalla()">Protectores de pantalla</a></li>
                            <li><a onclick="mostrarOtros()">Otros</a>
                            </ul>
                        </li>
                        <li><a onclick="mostrarOfertas()">Ofertas</a></li>
                        <li><a onclick="mostrarAudio()">Audio</a></li>
                        <li><a onclick="mostrarAlmacenamiento()">Memorias</a></li>
                    </ul>
            </div>
            <div class="iconUser">
                <img src="./imagenes/icon_usuario.png" width="70px" height="70px">
            </div>
        </div>
        <div class="lateral1"></div>
        <div id="productos" class="listaProductos">
            <h2> Esto te puede interesar...</h2>
            <?php
                    require_once 'login.php'; 
                    $conn = new mysqli($hn, $un, $pw, $db); 
                    if ($conn->connect_error){ //revisamos la conexion die($conn->connect_error); 
                    }

                    $_query = "SELECT * FROM inventario"; 
                    $result = $conn->query($_query); 
                    if (!$result){
                        die($conn->error); 
                    }
                    $rows = $result->num_rows; 
                    for ($j = 0 ; $j < $rows ; ++$j){
                    $result->data_seek($j);//buscamos la informacion del renglon seleccionado
                    $row = $result->fetch_array(MYSQLI_ASSOC);//
                    echo '<nav class="producto">';
                        echo '<ul id="recomendaciones'.$j.'" class="sub_menu">';
                            echo '<li class="contenedor_info"> 
                        <a> '. '<img class="imagenProducto" src="./imagenesProductos/'.$row['numeroParte'].'.png">'.'</a>'
                        . '<a>'.
                                    '<br>'.
                                    'Nombre: '. $row['nombreProducto'].'<br>'.
                                    'Modelo: '. $row['modelo']. '<br>'.
                                    'Descripcion: '. $row['descripcion'].'<br>'.
                                    'Precio: '. $row['precio'] . '<br>'.
                            '</a>  	 									
                                    </li>';
                            echo '<div class="boton">
                                    <span  id="boton_trailer'.$j.'" class="boton" onclick="ocultar_('.$j.')"></span>
                                </div>';
                            echo '</ul>';
                    echo '</nav>';
                    }
                    $result->close();
                    $conn->close();
                ?>
        </div>
        <div id="ofertas" class="listaProductos" style="display: none;">
                <h2>Solo por hoy...¡APROVECHA!</h2>
                <?php
                    require_once 'login.php'; 
                    $conn = new mysqli($hn, $un, $pw, $db); 
                    if ($conn->connect_error){ //revisamos la conexion die($conn->connect_error); 
                    }

                    $_query = "SELECT * FROM inventario WHERE estatus='Oferta'"; 
                    $result = $conn->query($_query); 
                    if (!$result){
                        die($conn->error); 
                    }
                    $rows = $result->num_rows; 
                    for ($j = 0 ; $j < $rows ; ++$j){
                    $result->data_seek($j);//buscamos la informacion del renglon seleccionado
                    $row = $result->fetch_array(MYSQLI_ASSOC);//
                    echo '<nav class="producto">';
                        echo '<ul id="recomendaciones'.$j.'" class="sub_menu">';
                            echo '<li class="contenedor_info"> 
                        <a> '. '<img class="imagenProducto" src="./imagenesProductos/'.$row['numeroParte'].'.png">'.'</a>'
                        . '<a>'.
                                    '<br>'.
                                    'Nombre: '. $row['nombreProducto'].'<br>'.
                                    'Modelo: '. $row['modelo']. '<br>'.
                                    'Descripcion: '. $row['descripcion'].'<br>'.
                                    'Precio: '. $row['precio'] . '<br>'.
                            '</a>  	 									
                                    </li>';
                            echo '<div class="boton">
                                    <span  id="boton_trailer'.$j.'" class="boton" onclick="ocultar_('.$j.')"></span>
                                </div>';
                            echo '</ul>';
                    echo '</nav>';
                    }
                    $result->close();
                    $conn->close();
                ?>
            </div>
            <div id="audio" class="listaProductos" style="display: none;">
                <h2>¡Lo mejor para tu misica!</h2>
                <?php
                    require_once 'login.php'; 
                    $conn = new mysqli($hn, $un, $pw, $db); 
                    if ($conn->connect_error){ //revisamos la conexion die($conn->connect_error); 
                    }

                    $_query = "SELECT * FROM inventario WHERE categoria='Audifonos'"; 
                    $result = $conn->query($_query); 
                    if (!$result){
                        die($conn->error); 
                    }
                    $rows = $result->num_rows; 
                    for ($j = 0 ; $j < $rows ; ++$j){
                    $result->data_seek($j);//buscamos la informacion del renglon seleccionado
                    $row = $result->fetch_array(MYSQLI_ASSOC);//
                    echo '<nav class="producto">';
                        echo '<ul id="recomendaciones'.$j.'" class="sub_menu">';
                            echo '<li class="contenedor_info"> 
                        <a> '. '<img class="imagenProducto" src="./imagenesProductos/'.$row['numeroParte'].'.png">'.'</a>'
                        . '<a>'.
                                    '<br>'.
                                    'Nombre: '. $row['nombreProducto'].'<br>'.
                                    'Modelo: '. $row['modelo']. '<br>'.
                                    'Descripcion: '. $row['descripcion'].'<br>'.
                                    'Precio: '. $row['precio'] . '<br>'.
                            '</a>  	 									
                                    </li>';
                            echo '<div class="boton">
                                    <span  id="boton_trailer'.$j.'" class="boton" onclick="ocultar_('.$j.')"></span>
                                </div>';
                            echo '</ul>';
                    echo '</nav>';
                    }
                    $result->close();
                    $conn->close();
                ?>
            </div>
            <div id="almacenamiento" class="listaProductos" style="display: none;">
                <h2>¡Lo mejor para tu misica!</h2>
                <?php
                    require_once 'login.php'; 
                    $conn = new mysqli($hn, $un, $pw, $db); 
                    if ($conn->connect_error){ //revisamos la conexion die($conn->connect_error); 
                    }

                    $_query = "SELECT * FROM inventario WHERE categoria='Memorias'"; 
                    $result = $conn->query($_query); 
                    if (!$result){
                        die($conn->error); 
                    }
                    $rows = $result->num_rows; 
                    for ($j = 0 ; $j < $rows ; ++$j){
                    $result->data_seek($j);//buscamos la informacion del renglon seleccionado
                    $row = $result->fetch_array(MYSQLI_ASSOC);//
                    echo '<nav class="producto">';
                        echo '<ul id="recomendaciones'.$j.'" class="sub_menu">';
                            echo '<li class="contenedor_info"> 
                        <a> '. '<img class="imagenProducto" src="./imagenesProductos/'.$row['numeroParte'].'.png">'.'</a>'
                        . '<a>'.
                                    '<br>'.
                                    'Nombre: '. $row['nombreProducto'].'<br>'.
                                    'Modelo: '. $row['modelo']. '<br>'.
                                    'Descripcion: '. $row['descripcion'].'<br>'.
                                    'Precio: '. $row['precio'] . '<br>'.
                            '</a>  	 									
                                    </li>';
                            echo '<div class="boton">
                                    <span  id="boton_trailer'.$j.'" class="boton" onclick="ocultar_('.$j.')"></span>
                                </div>';
                            echo '</ul>';
                    echo '</nav>';
                    }
                    $result->close();
                    $conn->close();
                ?>
            </div>
            <div id="cargadores" class="listaProductos" style="display: none;">
                <h2>¡Cuida tu equipo y mantenlo siempre cargado con la mejor calidad!</h2>
                <?php
                    require_once 'login.php'; 
                    $conn = new mysqli($hn, $un, $pw, $db); 
                    if ($conn->connect_error){ //revisamos la conexion die($conn->connect_error); 
                    }

                    $_query = "SELECT * FROM inventario WHERE categoria='Cargadores'"; 
                    $result = $conn->query($_query); 
                    if (!$result){
                        die($conn->error); 
                    }
                    $rows = $result->num_rows; 
                    for ($j = 0 ; $j < $rows ; ++$j){
                    $result->data_seek($j);//buscamos la informacion del renglon seleccionado
                    $row = $result->fetch_array(MYSQLI_ASSOC);//
                    echo '<nav class="producto">';
                        echo '<ul id="recomendaciones'.$j.'" class="sub_menu">';
                            echo '<li class="contenedor_info"> 
                        <a> '. '<img class="imagenProducto" src="./imagenesProductos/'.$row['numeroParte'].'.png">'.'</a>'
                        . '<a>'.
                                    '<br>'.
                                    'Nombre: '. $row['nombreProducto'].'<br>'.
                                    'Modelo: '. $row['modelo']. '<br>'.
                                    'Descripcion: '. $row['descripcion'].'<br>'.
                                    'Precio: '. $row['precio'] . '<br>'.
                            '</a>  	 									
                                    </li>';
                            echo '<div class="boton">
                                    <span  id="boton_trailer'.$j.'" class="boton" onclick="ocultar_('.$j.')"></span>
                                </div>';
                            echo '</ul>';
                    echo '</nav>';
                    }
                    $result->close();
                    $conn->close();
                ?>
            </div>
            <div id="fundas" class="listaProductos" style="display: none;">
                <h2>¡Protejelo y evita accidentes!</h2>
                <?php
                    require_once 'login.php'; 
                    $conn = new mysqli($hn, $un, $pw, $db); 
                    if ($conn->connect_error){ //revisamos la conexion die($conn->connect_error); 
                    }

                    $_query = "SELECT * FROM inventario WHERE categoria='Fundas'"; 
                    $result = $conn->query($_query); 
                    if (!$result){
                        die($conn->error); 
                    }
                    $rows = $result->num_rows; 
                    for ($j = 0 ; $j < $rows ; ++$j){
                    $result->data_seek($j);//buscamos la informacion del renglon seleccionado
                    $row = $result->fetch_array(MYSQLI_ASSOC);//
                    echo '<nav class="producto">';
                        echo '<ul id="recomendaciones'.$j.'" class="sub_menu">';
                            echo '<li class="contenedor_info"> 
                        <a> '. '<img class="imagenProducto" src="./imagenesProductos/'.$row['numeroParte'].'.png">'.'</a>'
                        . '<a>'.
                                    '<br>'.
                                    'Nombre: '. $row['nombreProducto'].'<br>'.
                                    'Modelo: '. $row['modelo']. '<br>'.
                                    'Descripcion: '. $row['descripcion'].'<br>'.
                                    'Precio: '. $row['precio'] . '<br>'.
                            '</a>  	 									
                                    </li>';
                            echo '<div class="boton">
                                    <span  id="boton_trailer'.$j.'" class="boton" onclick="ocultar_('.$j.')"></span>
                                </div>';
                            echo '</ul>';
                    echo '</nav>';
                    }
                    $result->close();
                    $conn->close();
                ?>
            </div>
            <div id="protectoresPantalla" class="listaProductos" style="display: none;">
                <h2>¡Cuida tu pantalla con los mejores protectores!</h2>
                <?php
                    require_once 'login.php'; 
                    $conn = new mysqli($hn, $un, $pw, $db); 
                    if ($conn->connect_error){ //revisamos la conexion die($conn->connect_error); 
                    }

                    $_query = "SELECT * FROM inventario WHERE categoria='Fundas/Micas'"; 
                    $result = $conn->query($_query); 
                    if (!$result){
                        die($conn->error); 
                    }
                    $rows = $result->num_rows; 
                    for ($j = 0 ; $j < $rows ; ++$j){
                    $result->data_seek($j);//buscamos la informacion del renglon seleccionado
                    $row = $result->fetch_array(MYSQLI_ASSOC);//
                    echo '<nav class="producto">';
                        echo '<ul id="recomendaciones'.$j.'" class="sub_menu">';
                            echo '<li class="contenedor_info"> 
                        <a> '. '<img class="imagenProducto" src="./imagenesProductos/'.$row['numeroParte'].'.png">'.'</a>'
                        . '<a>'.
                                    '<br>'.
                                    'Nombre: '. $row['nombreProducto'].'<br>'.
                                    'Modelo: '. $row['modelo']. '<br>'.
                                    'Descripcion: '. $row['descripcion'].'<br>'.
                                    'Precio: '. $row['precio'] . '<br>'.
                            '</a>  	 									
                                    </li>';
                            echo '<div class="boton">
                                    <span  id="boton_trailer'.$j.'" class="boton" onclick="ocultar_('.$j.')"></span>
                                </div>';
                            echo '</ul>';
                    echo '</nav>';
                    }
                    $result->close();
                    $conn->close();
                ?>
            </div>
            <div id="otros" class="listaProductos" style="display: none;">
                <h2>¡Explora nuevos accesorios!</h2>
                <?php
                    require_once 'login.php'; 
                    $conn = new mysqli($hn, $un, $pw, $db); 
                    if ($conn->connect_error){ //revisamos la conexion die($conn->connect_error); 
                    }

                    $_query = "SELECT * FROM inventario WHERE categoria!='Audifonos'"; 
                    $result = $conn->query($_query); 
                    if (!$result){
                        die($conn->error); 
                    }
                    $rows = $result->num_rows; 
                    for ($j = 0 ; $j < $rows ; ++$j){
                    $result->data_seek($j);//buscamos la informacion del renglon seleccionado
                    $row = $result->fetch_array(MYSQLI_ASSOC);//
                    echo '<nav class="producto">';
                        echo '<ul id="recomendaciones'.$j.'" class="sub_menu">';
                            echo '<li class="contenedor_info"> 
                        <a> '. '<img class="imagenProducto" src="./imagenesProductos/'.$row['numeroParte'].'.png">'.'</a>'
                        . '<a>'.
                                    '<br>'.
                                    'Nombre: '. $row['nombreProducto'].'<br>'.
                                    'Modelo: '. $row['modelo']. '<br>'.
                                    'Descripcion: '. $row['descripcion'].'<br>'.
                                    'Precio: '. $row['precio'] . '<br>'.
                            '</a>  	 									
                                    </li>';
                            echo '<div class="boton">
                                    <span  id="boton_trailer'.$j.'" class="boton" onclick="ocultar_('.$j.')"></span>
                                </div>';
                            echo '</ul>';
                    echo '</nav>';
                    }
                    $result->close();
                    $conn->close();
                ?>
            </div>
        <div class="lateral2"></div>
    </body>
    <script type="text/javascript"> mostrarProductos();</script>
</html>