<?php


$a = $_GET ["people"];
$b = $_GET ["name"];
$c = $_GET ["mail"];
$d = $_GET ["phone"];
$f = $_GET ["comment"];

include("connection.php");

$query = "INSERT INTO form (people, name, mail, phone, comment) VALUES ('$a', '$b', '$c', '$d', '$f')";

$run = mysqli_query($con, $query);

if ($run) { ?>
    <script>
        alert(" Data inserted successfully");
        window.location.href="index.html";
        </script>
        <?php  }



?>