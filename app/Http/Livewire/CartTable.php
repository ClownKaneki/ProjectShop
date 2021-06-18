<?php

namespace App\Http\Livewire;

use App\Helpers\CartFacade as CartFacade;
use Livewire\Component;

class CartTable extends Component
{
    public $cart;
    public $cartTotal = 0;

    public function mount() {
        $this->cart = CartFacade::get();
        foreach($this->cart['products'] as $product) {
            $this->cartTotal += $product['price'];
        }
    }

    public function removeFromCart($productId)
    {
        CartFacade::remove($productId);
        $this->emit('refreshCart');
        if(count($this->cart['products']) == 1) {
            CartFacade::clear();
            $this->cartTotal = 0;
        }
        else {
            $this->cartTotal -= $this->cart['products'][$productId]['price'];
        }
    }

    public function checkout(): void
    {
        CartFacade::clear();
        $this->emit('refreshCart');
        $this->cartTotal = 0;
    }

    public function render()
    {
        $this->cart = CartFacade::get();
        return view('livewire.cart-table');
    }
}
