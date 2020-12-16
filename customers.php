<?php
require_once("./config/db.php");
require_once("./lib/pdo_db.php");
require_once("./modals/Customer.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Customers</title>
</head>

<body>
    <?php
    $customer = new Customer();
    $customers = $customer->showCustomer();
    ?>
    <div class="container">
        <h2 class="text-center">Customer</h2>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">CUSTOMER_ID</th>
                    <th scope="col">FIRST_NAME</th>
                    <th scope="col">LAST_NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">DATE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($customers as $value) {
                    $date = date_format(date_create($value->created_at), "d-m-Y h:i a");
                ?>
                    <tr>
                        <td><?= $value->id ?></td>
                        <td><?= $value->first_name ?></td>
                        <td><?= $value->last_name ?></td>
                        <td><?= $value->email ?></td>
                        <td><?= $date ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="./index.php" class="btn btn-primary">Go back</a>
    </div>
</body>

</html>