<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category {{$category->name}}</title>
</head>
<body>

<p>Offered by</p>
<ul>
    @foreach($category->cuisines as $cuisine)
        <li><a href="/cuisines/{{$cuisine->cuisine_id}}">{{$cuisine->name}}</a></li>
    @endforeach
</ul>

<p>Products:</p>
<ul>
    @foreach($category->products as $product)
        <li><a href="/products/{{$product->product_id}}">{{$product->name}}</a></li>
    @endforeach
</ul>

</body>
</html>
