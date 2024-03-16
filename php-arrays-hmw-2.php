<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo "php-arrays-2 "  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<h1  class="text-center mb-5 mt-4 text-primary" >foreach loop</h1>
<div class="d-flex justify-content-center">
    
<h2 class="text-danger">
    <?php

    $masivi =  [33, 12, 100, 30, 56, 34, 10, 5, 6, 89, 1000];

    foreach($masivi as $result){
        if($result % 3 == 0){
            echo $result . "<br/>";
        }
    }

    ?>
</h2>
</div>
</body>
</html>