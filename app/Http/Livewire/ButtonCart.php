<?php

namespace App\Http\Livewire;

use App\Helpers\CartFacade as CartFacade;
use App\Models\Product;
use Livewire\Component;

class ButtonCart extends Component
{
    public $product;

    public function addToCart(Product $product): void
    {
        CartFacade::add($product);
        $this->emit('refreshCart');
    }

    public function render()
    {
        return view('livewire.button-cart');
    }
}
