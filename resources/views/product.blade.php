<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product {{$product->name}}</title>
</head>
<body>
    <p>Name: {{$product->name}}</p>
    <p>Desc: {{$product->description}}</p>
    <p>price: £ {{$product->price}}</p>
    <p>Time to prep: {{intdiv(floatval($product->time_to_prep),60)}} </p>
    <p>from: <a href="/cuisines/{{$product->cuisine->cuisine_id}}">{{$product->cuisine->name}}</a></p>
    <p>under: <a href="/categories/{{$product->category->category_id}}">{{$product->category->name}}</a> </p>
    <img src="{{$product->image}}" alt="{{$product->description}}">
</body>
</html>
