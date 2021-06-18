<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Helpers\CartFacade as CartFacade;

class Cart extends Component
{
    public $cart;

    protected $listeners = ['refreshCart' => 'render'];

    public function render()
    {
        $this->cart = CartFacade::get();
        return view('livewire.cart');
    }
}
