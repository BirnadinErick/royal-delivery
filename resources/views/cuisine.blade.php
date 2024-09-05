<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuisine {{$cuisine->name}}</title>
</head>
<body>
<h2>{{$cuisine->name}}</h2>

<p>Categories Available</p>
<ul>
    @foreach($cuisine->categories as $category)
        <li><a href="/categories/{{$category->category_id}}">{{$category->name}}</a></li>
    @endforeach
</ul>

<p>Products Offered</p>
<ul>
    @foreach($cuisine->products as $product)
        <li><a href="/products/{{$product->product_id}}">{{$product->name}}</a></li>
    @endforeach
</ul>
</body>
</html>
