<li class="nav-item" style="position: relative">
    <a href="{{ route('dashboard') }}">
        <i class="bx bx-shopping-bag text-white" style="font-size: 40px"></i>
        <span class="text-white cart-numb">{{ count($cart['products']) }}</span>
    </a>
</li>
