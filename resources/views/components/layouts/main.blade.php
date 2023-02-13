<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">

    <div class="container mx-auto">
        <nav class="bg-white shadow-md rounded-b-md p-4">
            <ul class="flex justify-center gap-4 text-gray-600">
                <li class="hover:text-indigo-600">
                    <a href="{{ route('product.index') }}">Produk</a>
                </li>
                <li class="hover:text-indigo-600">
                    <a href="{{ route('transaction.index') }}">Transaksi</a>
                </li>
                @guest
                <li class="hover:text-indigo-600">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="hover:text-indigo-600">
                    <a href="{{ route('register') }}">Register</a>
                </li>
                @endguest
                @auth
                <li class="hover:text-indigo-600">
                    <a href="{{ route('logout') }}">Logout</a>
                </li>
                @endauth
            </ul>
        </nav>
        <div class="mt-6">
            {{ $slot }}
        </div>
    </div>


    @vite('resources/js/app.js')
</body>
</html>
