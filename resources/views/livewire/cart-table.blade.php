<div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cart['products'] as $product)
                    <tr :key="{{ $loop->index }}">
                        <td>{{ $product['name'] }}</td>
                        <td>{{ $product['price'] }}$</td>
                        <td><span class="btn btn-danger" wire:click="removeFromCart({{ $product['id'] }})">Delete</span></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <div class="alert alert-danger">No products in the cart</div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="font-weight-bold">Total: {{ $cartTotal }}$</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <button class="btn btn-danger" wire:click="checkout()">Clear cart</button>
</div>
