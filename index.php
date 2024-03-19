<?php 

$length = $_GET['pass-length'];



include "./function.php";

session_start();




if(isset($_GET['pass-length'])){
    
    $_SESSION['password'] = passGenerator($length);

    var_dump( $_SESSION['password']);
    
    
    header("Location: ./showPassword.php");
   
}





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


    <form action="index.php" class="mb-5">
        <div class="mb-3">
            <label for="pass-length" class="form-label">Inserisci la lunghezza della password</label>
            <input type="number" class="form-control" id="pass-length" name="pass-length">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   
    </div>

</div>

</div>
    
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>