<header>
    <h1>Registro de Categoria</h1>
</header>
<main>
    <form action="categoria.php" method="post">
        <label for="idcat">Categoria</label>
        <input type="number" name="idcat" id="idcat" placeholder="Ingrese el id">
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria" placeholder="Ingrese la categoria">
        <div>
            <button type="submit" name="enviarc">Enviar</button>
            <button type="submit" name="buscarc">Buscar</button>
            <button type="submit" name="eliminarc">Eliminar</button>
            <button type="submit" name="actualizarc">Actualizar</button>
            <br><br>
            <button type="submit" name="libros"><a href="index.php">Libros</a></button>
        </div>
    </form>
</main>