<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title> Cantine Choupi: </title>
</head>
<body>
    <h1> Cantine Choupi Shopping Cart: </h1>
    <div>
        <nav> 
            <a href="/show"> Products </a>
            <a href="/index"> Category </a>
            <a href="{{ route('product.shoppingCart') }}"> Shopping Cart </a>
            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </nav>
        <section> 
            @if(Session::has('cart'))
            @foreach($products as $product)
            <ul classs="list=group-item">
                <span>Amount: {{ $product['qty']}} </span>
                <p>Name: {{ $product['item']['name']}}</p>
                <span>Price:  &euro; {{$product['price']}}</span>
                <br>
                <br>
                <button> 
                <a href="#"> Delete one</a>
                </button>
                <button> 
                <a href="#"> Delete all</a>
                </button>
            </ul>

            @endforeach

        </section>
        <section> 
            <ul classs="list=group-item">
                  <h4> Total: {{$totalPrice}} </h4>
            </ul>
        </section>
        <section> 
            <ul classs="list=group-item">
            <button>
                <a href="{{ route('checkout') }}"> Check out </a>
            </button>
            </ul>
        </section>
        @else
        <section> 
            <ul classs="list=group-item">
                <h2> No Items in cart!</h2>
            </ul>
        </section>

        @endif
       
    
    </div>
</body>
</html>