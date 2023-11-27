<?php
session_start();
require('../admin/prcd/qc.php');
if (isset($_POST['usr']) && isset($_POST['pwd'])) {
   
    $id = $_POST['usr'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM usuarios WHERE usr = '$id' AND pwd ='$pwd'";
    $resultado_sql = $conn->query($sql);
    if($row_sql=mysqli_fetch_array($resultado_sql)){
        
        if($row_sql['perfil'] == 1){
            echo json_encode(array('success' => 1));
        }
    } 
        else{
            echo json_encode(array('success' => 0));
        }
   
} else {
    echo json_encode(array('success' => 0));
}

?>