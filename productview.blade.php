<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title> Cantine Choupi: </title>
</head>
<body>
    <h1> Cantine Choupi Products: </h1>
    <div>
        <nav> 
            <a href="/show"> Products </a>
            <a href="/index"> Category </a>
            <a href="{{ route('product.shoppingCart') }}"> Shopping Cart </a>
            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </nav>
    <table> 
        <tr>
            <th> Name: </th>
            <?//<th> Image: </th>?>
            <th> Description: </th>
            <th> Category: </th>
            <th> Price: </th>
            <th> Add: </th>
        </tr>
        @foreach($data as $row)
        <tr>
            <td>{{$row->name}}</td>
            <?//<td>{{$row->image_url}}</td> ?>
            <td>{{$row->description}}</td>
            <td>{{$row->categoryname}}</td>
            <td>&euro; {{$row->price}}</td>
            <td><a href="{{ route('product.addToCart', ['id' => $row->id]) }}" role="button"> Add to Cart </a></td>
            @csrf
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>




