<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paypage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 text-center">Intro to React course [$30]</h2>
        <form action="charge.php" method="post" id="payment-form">
            <div class="form-row">
                <input type="text" name="first_name" class="form-control my-3 StripeElement StripeElement--empty" placeholder="First name">
                <input type="text" name="last_name" class="form-control my-3 StripeElement StripeElement--empty" placeholder="Last name">
                <input type="email" name="email_address" class="form-control my-3 StripeElement StripeElement--empty" placeholder="Email address">
                <div id="card-element" class="form-group">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button>Submit Payment</button>
            <br><br>
            <a href="./customers.php" class="btn btn-danger btn-rounded">Show customers</a>
            <a href="./transactions.php" class="btn btn-danger btn-rounded">Transaction history</a>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/charge.js"></script>
</body>

</html>