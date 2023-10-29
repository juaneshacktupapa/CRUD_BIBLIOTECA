<?php
    include "conexion.php";
    $options = "";
    $consulta = "SELECT * FROM categoria";
    $result = consulta($consulta);
    if($result){
        $contar = mysqli_num_rows($result);
        if($contar > 0){
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $id = $row['Id'];
                $categoria = $row['Categoria'];
                $options .= "<option value='$id'>$categoria</option>";
            }
        }else{
            $options = "<option value='0'>No hay usuarios registrados</option>";
        }
    }
?>
<header>
    <h1>Registro de libros</h1>
</header>
<main>
    <form action="index.php" method="post">
        <label for="isbn">ISBN</label>
        <input type="number" name="isbn" id="isbn" placeholder="Ingrese el isbn">
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
        <br>
        <label for="autor">Autor</label>
        <input type="text" name="autor" id="" placeholder="Ingrese el autor">
        <br>
        <label for="año">Año</label>
        <input type="date" name="año" id="año" placeholder="Ingrese el año">
        <br>
        <label for="paginas">Numero de Paginas</label>
        <input type="number" name="paginas" id="paginas" placeholder="Ingrese la cantidad de paginas">
        <br>
        <label for="editorial">Editorial</label>
        <input type="text" name="editorial" id="editorial" placeholder="Ingrese la editorial">
        <br>
        <label for="idcategoria">Categoria</label>
        <select name="idcategoria" id="idcategoria">
            <?php echo $options; ?>
        </select>
        <br>
        <div>
            <button type="submit" name="enviar">Enviar</button>
            <button type="submit" name="buscar">Buscar</button>
            <button type="submit" name="eliminar">Eliminar</button>
            <button type="submit" name="actualizar">Actualizar</button>
            <br><br>
            <button type="submit" name="categoria"><a href="categoria.php">Categoria</a></button>
        </div>
    </form>
</main>