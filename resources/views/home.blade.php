<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kings Delivery System</title>
</head>
<body>

<section>
    <ul>
        @foreach($cuisines as $cuisine)
            <li><a href="/cuisines/{{$cuisine->cuisine_id}}">{{ $cuisine->name }}</a></li>
        @endforeach
    </ul>
</section>

<section>
    <ul>
        @foreach($categories as $category)
            <li><a href="/categories/{{$category->category_id}}">{{ $category->name}}</a></li>
        @endforeach
    </ul>
</section>

<section>
    <ul>
        @foreach($products as $product)
            <li><a href="/products/{{$product->product_id}}">{{ $product->name }}</a></li>
        @endforeach
    </ul>
</section>

</body>
</html>
