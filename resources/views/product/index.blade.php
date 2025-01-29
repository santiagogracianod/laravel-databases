<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Products list</h1>

    @forelse ($products as $product)
        <div>
            <h3> {{ $product->name }} </h3>
            <p> {{ $product->short_description  }} </p>
            <p> {{ $product->price }} COP </p>
        </div>
    @empty
        <p>No products found</p>
    @endforelse

</body>
</html>
