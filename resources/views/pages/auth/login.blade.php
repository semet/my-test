<x-layouts.auth>
    <div class="w-[500px] mx-auto mt-10">
        <h1 class="my-10 text-3xl text-gray-700 font-semibold text-center">
            Login
        </h1>
        @if(session('error'))
        <div class="bg-rose-400 p-4 rounded-md shadow-md my-2 text-gray-100">
            {{ session('error') }}
        </div>
        @endif
        <form class="bg-white shadow-lg rounded-lg px-6 py-12" action="{{ route('login.post') }}" method="post">
            @csrf
            <div class="mb-6">
                <input type="text" name="username" id="username" class="form-input px-4 py-3 rounded-lg w-full border-indigo-500 focus:border-indigo-500 focus:ring-indigo-500 @error('username') border-pink-700 ring-pink-700 @enderror">
            </div>
            <div class="mb-6">
                <input type="password" name="password" id="password" class="form-input px-4 py-3 rounded-lg w-full border-indigo-500 focus:border-indigo-500 focus:ring-indigo-500 @error('password') border-pink-700 ring-pink-700 @enderror">
            </div>
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input id="remember" name="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                </div>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 p-2 text-gray-300 hover:text-gray-200 rounded-lg">Login</button>
            <div class="mt-4">
                <p>Belum punya akun? <a class="text-indigo-600" href="{{ route('register') }}">registrasi</a> sekarang</p>
            </div>
        </form>

    </div>
</x-layouts.auth>
