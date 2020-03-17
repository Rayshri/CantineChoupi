<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title> Cantine Choupi: </title>
</head>
<body>
    <h1> Cantine Choupi Order: </h1>
    <div>
        <nav> 
            <a href="/show"> Products </a>
            <a href="/index"> Category </a>
            <a href="{{ route('product.shoppingCart') }}"> Shopping Cart </a>
            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </nav>

        <section> 
            <h1> Check out </h1>
            <h4> Your total: &euro; {{$total}}</h4>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form"> 
            <label> Name: </label>
            <input type="text" name="name" placeholder="Enter here your Firstname..." required>
            <br>
            <br>
            <label> Surname: </label>
            <input type="text" name="surname" placeholder="Enter here your Surname..." required>
            <br>
            <br>
            <label> Address: </label>
            <input type="text" name="address" placeholder="Enter here your Address..." required>
            <br>
            <br>
            <label> City: </label>
            <input type="text" name="city" placeholder="Enter here your City..." required>
            <br>
            <br>
            <label> Zip Code: </label>
            <input type="text" name="zipcode" placeholder="Enter here your Zip code..." required>
            <br>
            <br>
            <label> Card Holder Name: </label>
            <input type="text" name="cardholdername" placeholder="Enter here your Card Holder Name..." required>
            <br>
            <br>
            <label> Credit Card Number: </label>
            <input type="text" name="creditcardnumber" placeholder="Enter here your Credit Card Number..." required>
            <br>
            <br>
            <label> Select your payment option: <label> <br>
            <input type="radio" id="ideal" name="payment" value="ideal" required>
            <label> IDEAL </label> <br>
            <input type="radio" id="paypal" name="payment" value="paypal" required>
            <label> PayPal </label> <br>
            <input type="radio" id="visa" name="payment" value="visa" required>
            <label> Visa </label> <br>
            <input type="radio" id="cash" name="payment" value="cash" required>
            <label> Cash </label> <br>  
            {{csrf_field()}}
            <br>
            <br>
            <button type="submit"> Buy now </button>
            </form>
        </section>

    </div>
</body>
</html>