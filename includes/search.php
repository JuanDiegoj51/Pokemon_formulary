<?php
    include('connect.php');
    if(isset($_GET["buscar"])){
        $nick = trim($_GET['username']);
        $query = "SELECT *  FROM `info_user` WHERE `nick` LIKE '$nick' ";
        $rows = mysqli_query($conexion, $query);
        if (mysqli_num_rows($rows)>0){
            while($row=mysqli_fetch_array($rows)){
            echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]." ".$row[6];
            ?>
            <a href="../public/index.php?user=$row[0]&passw=$row[1]"> 
            <?php
            $_SESSION['message'] = 'La consulta fue exitosa';
            $_SESSION['message_type'] = 'success';
        }
    }else{
        $_SESSION['message'] = 'Verifique el Nickname';
        $_SESSION['message_type'] = 'warning';
    }
    header("Location: http://localhost/dashboard/p/public/index.php");
}
?>
