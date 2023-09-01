<div class="grid grid-cols-3 gap-3">
    @forelse ($products as $product )
        @livewire('product', ['product' => $product])
    @empty
        <p>No Product Found</p>
    @endforelse
</div>
