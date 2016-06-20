<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Session;

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
        Session::flash('Message','Thank you for your interest, we will contact you very soon!');

        return redirect('/');
    }
}
