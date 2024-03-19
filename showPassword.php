<?php 

session_start();

$pass = $_SESSION['password'];


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container py-4">

<div class="row justify-content-center ">

    <div class="col-4">

    
    <?php 
    
        echo '<h2 class="text-center mb-4">Ecco qui la tua password generata</h2>';
        
        echo '<div class="bg-success p-4 rounded rounded-3 text-center text-warning fw-bold ">';
    
        echo $pass.'
    
        </div>';
 
    ?>
    
    </div>

</div>

</div>
    
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>