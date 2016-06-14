<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class AppointmentController extends Controller
{
    public function showForm($productId)
    {
        $product = Product::find($productId);

        return view('pages.appointment', compact('product'));
    }

    public function getForm(Request $request, $productId)
    {
        //Send mail
        dd($request->input('name'), $request->input('email'));

        return redirect('/');
    }
}
