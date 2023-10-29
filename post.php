<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $isbn = $_POST["isbn"];
        $Nombre = $_POST["nombre"];
        $Autor = $_POST["autor"];
        $Año = $_POST["año"];
        $Paginas = $_POST["paginas"];
        $Editorial = $_POST["editorial"];
        $IdCategoria = $_POST["idcategoria"];
        
        if(isset($_POST["buscar"])){
            
            $consulta = "SELECT l.ISBN AS ISBN, l.Nombre AS Nombre, l.Autor AS Autor, l.Año AS Año, l.NroPaginas AS NroPaginas, l.Editorial AS Editorial, c.Categoria AS Categoria 
            FROM libro l INNER JOIN categoria c ON l.IdCategoria = c.Id;";
            $result = consulta($consulta);

            if($result){
                echo"
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <td>ISBN</td>
                                <td>Nombre</td>
                                <td>Autor</td>
                                <td>Año</td>
                                <td>Numero de Paginas</td>
                                <td>Editorial</td>
                                <td>Categoria</td>
                                </tr>
                            </thead>
                            <tbody>
                    ";
                                while($row = mysqli_fetch_array($result)){
                                    echo"<tr>";
                                        echo"<td>".$row['ISBN']."</td>";                  
                                        echo"<td>".$row['Nombre']."</td>";                  
                                        echo"<td>".$row['Autor']."</td>";                  
                                        echo"<td>".$row['Año']."</td>";                  
                                        echo"<td>".$row['NroPaginas']."</td>";                  
                                        echo"<td>".$row['Editorial']."</td>";                
                                        echo"<td>".$row['Categoria']."</td>";                
                                    echo"</tr>";
                                    }
                    echo"
                            </tbody>
                        </table>
                    </div>";
            }
        }

        if(isset($_POST["enviar"])){

            $consulta = "INSERT INTO libro (ISBN, Nombre, Autor, Año, NroPaginas, Editorial, IdCategoria) VALUES ('$isbn', '$Nombre', '$Autor', '$Año', '$Paginas', '$Editorial', $IdCategoria)";
            $result = consulta($consulta);

            if ($result){
                echo "Datos almacenados correctamente";
            }
        }

        if(isset($_POST["eliminar"])){
            
            $consulta = "DELETE FROM libro where ISBN = $isbn";    
            $result = consulta($consulta);

            if ($result){
                echo "Datos eliminados correctamente";
            }
        }

        if(isset($_POST["actualizar"])){

        $consulta = "UPDATE libro SET ISBN = '$isbn', Nombre = '$Nombre', Autor = '$Autor', Año = '$Año', NroPaginas = '$Paginas', Editorial = '$Editorial', IdCategoria = $IdCategoria WHERE ISBN = $isbn;";
        $result = consulta($consulta);

        if ($result){
        echo "Datos actualizados correctamente";
        }
        }

    }   
?>