@php
    $products = array(
        [
            'id' => 1,
            'name' => 'Apple',
            'price' => 280,
            'qty' => 1,
            'subtotal' => 280
        ],
        [
            'id' => 2,
            'name' => 'Mango',
            'price' => 80,
            'qty' => 1,
            'subtotal' => 80
        ],
        [
            'id' => 3,
            'name' => 'Goava',
            'price' => 50,
            'qty' => 1,
            'subtotal' => 50
        ],
        [
            'id' => 4,
            'name' => 'Lichi',
            'price' => 300,
            'qty' => 1,
            'subtotal' => 300
        ]
);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cart</title>
    @livewireStyles
</head>
<body>

    <h1>Livewire cart </h1>
    @livewire('cart',['products'=>$products])

    @livewireScripts
</body>
</html>
