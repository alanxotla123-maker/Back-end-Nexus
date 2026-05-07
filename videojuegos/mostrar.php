    <?php
    include("../Conexion/conexion.php");
     $sql = "SELECT * FROM videojuegos";
    $resultado = mysqli_query($conexion, $sql);

    while($fila = mysqli_fetch_assoc($resultado)) {
        echo " ID: " . $fila['id'] . 
             " - Nombre: " . $fila['titulo'] . 
             " - Genero: " . $fila['descripcion'] . 
             " - Precio: " . $fila['precio'] . "<br>";
    }
    
    ?>
