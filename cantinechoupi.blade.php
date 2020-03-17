<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cantine Choupi: </title>
</head>
<body>
    <h1> Cantine Choupi: </h1>
    <div class="container">
        <nav> 
            <a href="/show"> Products </a>
            <a href="/index"> Category </a>
            <a href="{{ route('product.shoppingCart') }}"> Shopping Cart </a>
            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </nav>
        

</div>
</div>
    </div>
</body>
</html>