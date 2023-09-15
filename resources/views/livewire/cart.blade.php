<div>
    <table border="1">
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Subtotal</th>
            <th>Remove</th>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product['name']}}</td>
                <td>{{$product['price']}}</td>
                <td> <button wire:click="increment({{$product['id']}})">+</button>{{$product['qty']}} <button wire:click="decrement({{$product['id']}})">-</button> </td>
                <td>{{$product['subtotal']}}</td>
                <td><button wire:click="remove({{$product['id']}})">remove</button></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total Amount</td>
                <td colspan="2">{{$total}}</td>
            </tr>
        </tfoot>
    </table>
</div>
