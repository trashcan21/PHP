<?php


if(isset($_GET["id"])){

include "connection.php";
$id_get = $_GET["id"];
$run = mysqli_query($con, "DELETE FROM form WHERE id = '$id_get'");

if ($run) { ?>

    <script>
        alert('recorde deleted successfully');
        window.location.href="salman4.php";
        </script>
        <?php

}
    }

    else{
        header("location: salman4.php");
    }
    ?>