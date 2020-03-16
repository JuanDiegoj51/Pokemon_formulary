<?php
    include('connect.php');
    if(isset($_GET["buscar"])){
        $nick = trim($_GET['username']);
        $query = "SELECT *  FROM `info_user` WHERE `nick` LIKE '$nick' ";
        $rows = mysqli_query($conexion, $query);
        if (mysqli_num_rows($rows)>0){
            while($row=mysqli_fetch_array($rows)){
            $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]." ".$row[6];
            echo "consulta completada";
        }
    }else{
        echo "La consulta no se pudo realizar";
    }
}
?>
