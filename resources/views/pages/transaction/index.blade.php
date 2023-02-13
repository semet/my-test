<x-layouts.main>
    <x-slot:title>
        Transactions
    </x-slot:title>
    <!-- component -->
    <div class="overflow-x-auto">
        <h1 class="text-center my-2 text-3xl font-semibold text-gray-600">Transactions</h1>
        <div class="min-w-screen bg-gray-100 flex items-center justify-center overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="flex justify-between mt-4">
                    <form class="flex gap-2 w-1/3" action="{{ route('transaction.search') }}" method="get">
                        <input type="text" name="reference_no" placeholder="Reference Number" value="{{ request()->get('reference_no') }}" class="w-full rounded-md border-indigo-500">
                        <button class="p-2 bg-gray-400 text-gray-50 shadow-md rounded-lg" type="submit">Search</button>
                    </form>
                    <div class="flex gap-2">
                        <a href="{{ route('transaction.create') }}" class="bg-blue-500 my-auto p-2 rounded-full shadow-md">
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
                                <th class="py-3 px-6 text-left">Reference No.</th>
                                <th class="py-3 px-6 text-left">Price</th>
                                <th class="py-3 px-6 text-center">Quantity</th>
                                <th class="py-3 px-6 text-center">Payment Amount</th>
                                <th class="py-3 px-6 text-center">Product Name</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($transactions as $transaction)

                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{ $transaction->reference_no }}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    Rp. {{ number_format($transaction->price) }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{ $transaction->quantity }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    Rp. {{ number_format($transaction->payment_amount) }}
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{ $transaction->product->name }}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="my-4 p-4">
                        {{ $transactions->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.main>
