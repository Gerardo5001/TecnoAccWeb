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
    for ($j = 0 ; $j < 7 ; ++$j)    {
    $result->data_seek($j);//buscamos la inforamcion del renglon seleccionado
    $row = $result->fetch_array(MYSQLI_ASSOC);//
    echo '<nav >';
        echo '<ul id="recomendaciones'.$j.'" class="sub_menu">';
            echo '<li class="contenedor_info"> 
         <a> '. '<img src="./imagenesProductos/'.$j.'.png" width="100px" height="150px">'.'</a>'
         . '<a>'.
                    '<br>'.
                    'Nombre: '. $row['nombreProducto'].'<br>'.
                    'Modelo: '. $row['modelo']. '<br>'.
                    'Descripcion: '. $row['descripcion'].'<br>'.
                    'Precio: '. $row['precio'] . '<br>'.
               '</a>  	 									
                    </li>';
             echo '<div class="boton">
                     <span  id="boton_trailer'.$j.'" class="boton_trailer_ver" onclick="ocultar_video('.$j.')"></span>
                 </div>';
            echo '</ul>';
    echo '</nav>';
       }
    $result->close();
    $conn->close();
?>

