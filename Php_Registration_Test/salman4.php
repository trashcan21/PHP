
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <a class="btn btn-primary me-md-2" href="index.html">Back to Home</a>

    <a href="delete.php" class="btn btn-success"><i class="bi bi-trash" ></i></a>
    </div>

    <?php
    include 'connection.php';
    $fetch = "SELECT * FROM form order by id desc";
    $run_query = mysqli_query($con, $fetch);


    if(mysqli_num_rows($run_query) > 0) {
        echo "<div class='row'>";     
        while($data = mysqli_fetch_assoc($run_query)) { ?>
        
    <div class="mt-3 col-md-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data["name"];?></h5>
            <p class="card-text">Email: <?php echo $data["mail"];?></p>
            <p class="card-text">Phone: <?php echo $data["phone"];?></p>
            <a href="#" class="btn btn-primary"><?php echo $data["comment"];?></a><br>
            <a href="#" class="btn btn-success"><i class="bi bi-pencil"></i></a> 
            <a href="delete_record.php?id=<?php echo $data["id"] ?>"class="btn btn-danger"><i class="bi bi-trash"></i></a> <br>

            </div>
            </div>
            </div>
            <?php }
            echo "</div>";
        }
        else {
            header ("location:index.html");
        }
        ?>
        </div>
        



        
           
    
    
    
