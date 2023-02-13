<x-layouts.auth>
    <div class="w-[500px] mx-auto mt-10">
        <h1 class="my-10 text-3xl text-gray-700 font-semibold text-center">
            Registrasi
        </h1>
        <form class="bg-white shadow-lg rounded-lg px-6 py-12" action="{{ route('register.post') }}" method="post">
            @csrf
            <div class="mb-6">
                <input type="text" name="name" id="name" placeholder="Nama Lengkap" class="form-input px-4 py-3 rounded-lg w-full border-indigo-400 ring-indigo-400 focus:border-indigo-500 focus:ring-indigo-500 @error('name') border-pink-700 ring-pink-700 @enderror">
            </div>

            <div class="mb-6">
                <input type="text" name="username" id="username" placeholder="Username" class="form-input px-4 py-3 rounded-lg w-full border-indigo-400 ring-indigo-400 focus:border-indigo-500 focus:ring-indigo-500 @error('username') border-pink-700 ring-pink-700 @enderror">
            </div>

            <div class="mb-6">
                <input type="password" name="password" id="password" placeholder="password" class="form-input px-4 py-3 rounded-lg w-full border-indigo-400 ring-indigo-400 focus:border-indigo-500 focus:ring-indigo-500 @error('password') border-pink-700 ring-pink-700 @enderror">
            </div>

            <div class="mb-6">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="konfirmasi password" class="form-input px-4 py-3 rounded-lg w-full border-indigo-300 focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 p-2 text-gray-300 hover:text-gray-200 rounded-lg">Login</button>
        </form>

    </div>
</x-layouts.auth>
