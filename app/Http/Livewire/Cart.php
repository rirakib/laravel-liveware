<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $products;
    public $total=0;
    public function mount($products)
    {
        $this->products = $products;
        $this->grandTotal();
    }

    public function increment($id)
    {
        foreach ($this->products as $key => $product) {
            if($product['id'] === $id){
                $this->products[$key]['qty']++;
                $this->products[$key]['subtotal'] = $this->products[$key]['price'] * $this->products[$key]['qty'];
            }
        }

        $this->grandTotal();
    }

    public function decrement($id)
    {
        foreach ($this->products as $key => $product) {
            if($product['id'] === $id){
                if($this->products[$key]['qty'] > 1){
                    $this->products[$key]['qty']--;
                    $this->products[$key]['subtotal'] = $this->products[$key]['price'] * $this->products[$key]['qty'];
                }
            }
        }

        $this->grandTotal();
    }

    public function remove($id){

        $this->products = array_filter($this->products,function($v) use ($id){
                                return $v['id'] != $id;
                            });
        $this->grandTotal();
    }

    private function grandTotal()
    {
        $this->total = 0;
        foreach ($this->products as $product) {
            $this->total += $product['subtotal'];
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
