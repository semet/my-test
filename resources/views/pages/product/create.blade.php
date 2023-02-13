<x-layouts.main>
    <x-slot:title>
        Create Product
    </x-slot:title>
    <div class="overflow-x-auto">
        <h1 class="text-center my-2 text-3xl font-semibold text-gray-600">Create Product</h1>
        <div class="min-w-screen bg-gray-100 flex items-center justify-center overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white w-1/2 mx-auto shadow-md rounded my-6 px-4 py-6">
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <input type="text" name="name" id="name" placeholder="Name" class="form-input px-4 py-3 rounded-lg w-full border-indigo-400 ring-indigo-400 focus:border-indigo-500 focus:ring-indigo-500 @error('name') border-pink-700 ring-pink-700 @enderror">
                        </div>

                        <div class="mb-6">
                            <input type="number" name="price" id="price" placeholder="Price" class="form-input px-4 py-3 rounded-lg w-full border-indigo-400 ring-indigo-400 focus:border-indigo-500 focus:ring-indigo-500 @error('price') border-pink-700 ring-pink-700 @enderror">
                        </div>

                        <div class="mb-6">
                            <input type="number" name="stock" id="stock" placeholder="Stock" class="form-input px-4 py-3 rounded-lg w-full border-indigo-400 ring-indigo-400 focus:border-indigo-500 focus:ring-indigo-500 @error('stock') border-pink-700 ring-pink-700 @enderror">
                        </div>

                        <div class="mb-6">
                            <textarea name="description" id="description" rows="5" class="form-input px-4 py-3 rounded-lg w-full border-indigo-400 ring-indigo-400 focus:border-indigo-500 focus:ring-indigo-500 @error('stock') border-pink-700 ring-pink-700 @enderror"></textarea>
                        </div>
                        <div class="mb-6 flex justify-center">
                            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 p-2 text-gray-300 hover:text-gray-200 rounded-lg">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-layouts.main>
