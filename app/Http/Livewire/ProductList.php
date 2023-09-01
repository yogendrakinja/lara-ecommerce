<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;
    // public $products;
    
    // protected $listeners = ['updateCart' => 'updateProducts'];

    // public function updateProducts(){
        // $this->products = Product::with(['wishlist' => function($qry){
        //     if(Auth::check()){
        //         return $qry->where('user_id', Auth::id());
        //     }
        // }])->paginate(5);
    // }
    
    // public function mount(){
    //     $this->updateProducts();
    // }

    public function render()
    {   
        return view('livewire.product-list', ['products' => Product::with(['wishlist' => function($qry){
            if(Auth::check()){
                return $qry->where('user_id', Auth::id());
            }
        }])->paginate(5)]);
    }
}
