<?php

namespace App\Http\Livewire;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WishlistNotification extends Component
{
    public $wishlist;
    protected $listeners = ['updateCart' => 'updateCart'];

    public function mount(){
        $this->wishlist = Auth::user()->wishlist;
    }

    public function updateCart(){
        $this->wishlist = Auth::user()->wishlist;
    }
    
    public function render()
    {
        return view('livewire.wishlist-notification', [
            "wishlist" => $this->wishlist
        ]);
    }
}
