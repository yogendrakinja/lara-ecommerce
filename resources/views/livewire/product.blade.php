<a href="{{route('products.show', $product->id)}}">
    <div class="w-full p-3 bg-white shadow-md">
        <p>{{$product->name}}</p>
        <p>{{$product->price}}</p>
        @if(count($product->wishlist) == 0)
        <button type="button" class="px-3 py-2 bg-lime-600 rounded text-white" wire:click="addToWishlist({{$product->id}})">Add to wishlist</button>
        @else
        <button type="button" class="px-3 py-2 bg-lime-600 rounded text-white" wire:click="removeFromWishlist({{$product->id}})">Remove From wishlist</button>
        @endif
    </div>
</a>
