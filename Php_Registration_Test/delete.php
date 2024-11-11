<?php

include "connection.php";

$run = mysqli_query($con, "DELETE FROM form");
if ($run) { ?>
<script>
alert('table has been emptied successfully');
window.location.href="salman4.php";

</script>


<?php
}


?>