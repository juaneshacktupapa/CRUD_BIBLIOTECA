<?php
    include "conexion.php";
    $idcat = $_POST["idcat"];   
    $Categoria = $_POST["categoria"];

    if(isset($_POST["enviarc"])){

        $consulta = "INSERT INTO categoria (Categoria) VALUES ('$Categoria');";
        $result = consulta($consulta);

        if ($result){
            echo "Datos almacenados correctamente";
        }
    }

    if(isset($_POST["buscarc"])){
            
        $consulta = "SELECT * FROM categoria;";
        $result = consulta($consulta);

        if($result){
            echo"
                <div>
                    <table>
                        <thead>
                            <tr>
                            <td>Id</td>
                            <td>Categoria</td>
                            </tr>
                        </thead>
                        <tbody>
                ";
                            while($row = mysqli_fetch_array($result)){
                                echo"<tr>";
                                    echo"<td>".$row['Id']."</td>";                  
                                    echo"<td>".$row['Categoria']."</td>";                               
                                echo"</tr>";
                                }
                echo"
                        </tbody>
                    </table>
                </div>";
        }
    }

    if(isset($_POST["eliminarc"])){
        
        $consulta = "DELETE FROM categoria WHERE Id = '$idcat';";    
        $result = consulta($consulta);

        if ($result){
            echo "Datos eliminados correctamente";
        }
    }

    if(isset($_POST["actualizarc"])){

        $consulta = "UPDATE categoria SET categoria = '$Categoria' WHERE Id = '$idcat';";    
        $result = consulta($consulta);

        if ($result){
            echo "Datos actualizados correctamente";
        }
    }
?>