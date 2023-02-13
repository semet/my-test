<x-layouts.main>
    <x-slot:title>
        My Test
    </x-slot:title>
    <!-- component -->
    <div class="overflow-x-auto">
        <h1 class="text-center my-2 text-3xl font-semibold text-gray-600">Products</h1>
        <div class="min-w-screen bg-gray-100 flex items-center justify-center overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="flex justify-between mt-4">
                    <form class="flex gap-2 w-1/3" action="{{ route('product.search') }}" method="get">
                        <input type="text" name="keyword" placeholder="product name" value="{{ request()->get('keyword') }}" class="w-full rounded-md border-indigo-500">
                        <button class="p-2 bg-gray-400 text-gray-50 shadow-md rounded-lg" type="submit">Search</button>
                    </form>
                    <div class="flex gap-2">
                        <a href="{{ route('product.create') }}" class="bg-blue-500 my-auto p-2 rounded-full shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-center">Price</th>
                                <th class="py-3 px-6 text-center">Stock</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($products as $product)

                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{ $product->name }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{ $product->price }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{ $product->stock }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href="{{ route('product.edit', $product) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('product.delete', $product) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="my-4 p-4">
                        {{ $products->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.main>
