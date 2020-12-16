<?php
require_once("./config/db.php");
require_once("./lib/pdo_db.php");
require_once("./modals/Transaction.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Transaction history</title>
</head>

<body>
    <?php
    $transaction = new Transaction();
    $transactions = $transaction->showTransaction();
    ?>

    <div class="container">
        <h2 class="text-center">Transaction History</h2>
        <hr>
        <table class="table table-striped table-hover table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">TRANSACTION_ID</th>
                    <th scope="col">CUSTOMER_ID</th>
                    <th scope="col">PRODUCT</th>
                    <th scope="col">AMOUNT</th>
                    <th scope="col">CURRENCY</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">DATE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($transactions as $value) {
                    $date = date_format(date_create($value -> created_at), "d-m-Y h:i a");
                ?>
                    <tr>
                        <td><?= $value->id ?></td>
                        <td><?= $value->customer_id ?></td>
                        <td><?= $value->product ?></td>
                        <td><?= $value->amount ?></td>
                        <td><?= $value->currency ?></td>
                        <td><?= $value->status ?></td>
                        <td><?= $date ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="./index.php" class="btn btn-primary">Go back</a>
    </div>
</body>

</html>