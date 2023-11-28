<?php
    require('qc.php');

    $sql = "SELECT * FROM secciones ORDER BY id DESC";
    $resultadoSql = $conn->query($sql);
    while($rowSQL = $resultadoSql->fetch_assoc()){
        echo'
        <tr>
            <td>'.$rowSQL['nombre'].'</td>
            <td>'.$rowSQL['titulo'].'</td>
            <td>'.$rowSQL['subtitulo'].'</td>
            <td>'.$rowSQL['imagen'].'</td>
        </tr>
        ';
    }

?>