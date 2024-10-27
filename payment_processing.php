<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-top: 0;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #FFF8E7;
            color:  black;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #666666  ;
        }
        .payment-logos {
            text-align: center;
        }
        .payment-logo {
            width: 100px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Checkout</h2>
        <form method="post" action="process_payment.php">
            <input type="hidden" name="product_name" value="Your Product Name">
            <input type="hidden" name="product_price" value="100">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Delivery location link" required>
            <label for="e_mail">E-mail</label>
            <input type="text" id="e_mail" name="e_mail" placeholder="Enter your email " required>
          
            
            <!--<input type='submit' name='buy_now' value='Buy Now' >-->
            <!-- Buttons for UPI IDs -->
            <!-- <button class="upi-button" type="button" onclick="payWithUPI('phonepe')">Cilck to Pay with PhonePe</button>
            <button class="upi-button" type="button" onclick="payWithUPI('googlepay')">Click to Pay with Google Pay</button>
            <button class="upi-button" type="button" onclick="payWithUPI('paytm')">Click to Pay with Paytm</button>-->
            <!-- Hidden fields for UPI IDs -->
            <!-- <input type="hidden" id="phonepe_upi" name="phonepe_upi">
            <input type="hidden" id="googlepay_upi" name="googlepay_upi">
            <input type="hidden" id="paytm_upi" name="paytm_upi">
            <input type='submit' name='buy_now' value='Buy Now' >-->
        </form>
        <div class="payment-logos">
            <img src="https://download.logo.wine/logo/PhonePe/PhonePe-Logo.wine.png" alt="PhonePe Logo" class="payment-logo">
            <img src="https://1000logos.net/wp-content/uploads/2023/03/Google-Pay-logo.png" alt="Google Pay Logo" class="payment-logo">
            <img src="https://cdn.freelogovectors.net/wp-content/uploads/2023/09/paytm_logo-freelogovectors.net_.png" alt="Paytm Logo" class="payment-logo">
            <input type='submit'onclick="window.location.href='https://razorpay.me/@theeventexperts'" name='buy_now' value='Buy Now' >
        </div>
    </div>
   <!-- <script>
        function payWithUPI(service) {
            // You can customize this function to handle the UPI payment process
            // For demonstration purposes, we'll just display an alert
            var upi_id = '';
            switch(service) {
                case 'phonepe':
                    upi_id = 'phonepe@upi';
                    break;
                case 'googlepay':
                    upi_id = 'googlepay@upi';
                    break;
                case 'paytm':
                    upi_id = 'paytm@upi';
                    break;
            }
            document.getElementById(service + '_upi').value = upi_id;
            alert('Swipe to Pay with ' + service.toUpperCase() + ': ' + upi_id);
        }
    </script>-->
</body>
</html>

<button onclick="window.location.href='https://razorpay.me/@theeventexperts'">Buy Now</button>