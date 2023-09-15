<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name;
    public $price;
    public $qty;
    public $total;

    public function mount($product)
    {
        $this->name = $product['name'];
        $this->price = $product['price'];
        $this->qty = $product['qty'];
        $this->total = $product['total'];
    }

    public function increment()
    {
        $this->qty++;
        $this->total = $this->qty * $this->price;
    }
    public function decrement()
    {
        $this->qty--;
        $this->total = $this->qty * $this->price;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
