<?php

namespace App\Http\Livewire;

use App\Models\Product as ModelProduct;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Product extends Component
{
    public $product;
    protected $listeners = ['updateCart' => 'updateProducts'];
    public function addToWishlist($productId){
        Auth::user()->wishlist()->create(['product_id' => $productId]);
        $this->emit('updateCart');
    }

    public function removeFromWishlist($productId){
        Auth::user()->wishlist()->where(['product_id' => $productId])->delete();
        $this->emit('updateCart');
    }


    public function updateProducts(){

    }

    public function render()
    {
        return view('livewire.product');
    }
}
