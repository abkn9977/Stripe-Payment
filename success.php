<?php
    if(!empty($_GET['tid']) && !empty($_GET['product'])){
        $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

        $tid = $GET['tid'];
        $product = $_GET['product'];
    }else{
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h2>Thank you for purchasing <?php echo $product; ?></h2>
        <hr>
        <p>Your transaction ID id&nbsp;&nbsp;:&nbsp;&nbsp;<b><?php echo $tid; ?></b></p>
        <p>Check your email for more info</p>
        <p><a href="index.php" class="btn btn-light mt-2">Go back</a></p>
    </div>
</body>

</html>