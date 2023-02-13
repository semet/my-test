<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::latest()->paginate(10);
        return view('pages.transaction.index', ['transactions' => $transactions]);
    }

    public function create()
    {
        $products = Product::latest()->get();
        return view('pages.transaction.create', [
            'products' => $products
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required'
        ]);

        $product = Product::find($request->product_id);

        $response = Http::withHeaders([
            'X-API-KEY' => 'DATAUTAMA'
        ])->post('https://sandbox.saebo.id/api/v1/transactions', [
            'quantity' => $request->quantity,
            'price' => $product->price,
            'payment_amount' => $product->price * $request->quantity
        ]);

        $decoded = json_decode($response);
        if ($decoded->message == 'OK') {
            Transaction::create([
                'product_id' => $product->id,
                'reference_no' => $decoded->data->reference_no,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'payment_amount' => $decoded->data->payment_amount
            ]);

            return redirect()->route('transaction.index');
        }
    }

    public function search(Request $request)
    {
        $transactions = Transaction::where('reference_no', 'like', '%' . $request->reference_no . '%')->latest()->paginate(10);
        return view('pages.transaction.index', ['transactions' => $transactions]);
    }
}
