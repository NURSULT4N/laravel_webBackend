<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow rounded " style="background: #2d3748 ">
    <h5 class="my-0 mr-md-auto font-weight-normal text-white">Teeth&Smile</h5>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="p-3 text-white " href="{{ route('home') }}">Home</a>
        <a class="p-3 text-white " href="{{ route('about') }}">About</a>
        <a class="p-3 text-white " href="{{ route('contact') }}">Contact</a>
        <a class="p-3 text-white " href="{{ route('contact-data') }}">Data</a>
        <a class="p-3 text-white " href="{{ route('signup') }}">Register</a>
{{--        <a class="p-3 text-white " href="/">Home</a>--}}
        <a class="p-3 text-white " href="{{ route('products.list')}}">Shop</a>
        <a href="{{ route('cart.list') }}" class="p-3 text-white flex items-center">
{{--            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>--}}
{{--            </svg>--}}
            <img src="img/cart.png" width="20" height="20" style="padding: 0  0 0" alt="Dental Implant">
            {{ Cart::getTotalQuantity()}}
        </a>

    </nav>
</div>
