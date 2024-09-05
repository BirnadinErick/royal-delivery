<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Model Test</title>
</head>
<body>

<section>
    <ul>
        @foreach($products as $product)
            <li><a href="/products/{{$product->product_id}}">{{ $product->name }} from {{$product->cuisine->name}}</a></li>
        @endforeach
    </ul>
</section>

</body>
</html>
