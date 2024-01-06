<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Razorpay Payment</title>
</head>
<body>
    <form action="{{ route('company.razorpay.payment') }}" method="POST">
        @csrf
        <script src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="{{ config('gatewaySettings.razorpay_key') }}"
            data-currency="{{ config('gatewaySettings.razorpay_currency_name') }}"
            data-amount="1000"
            data-buttontext="Pay"
            data-name="{{ session('selected_plan')['label'] . ' Plan' }}"
            data-description="payment for the product"
            data-theme.color=""
        >

        </script>
    </form>
</body>
</html>
