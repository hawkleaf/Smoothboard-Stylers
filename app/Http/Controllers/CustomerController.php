<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests;
use Session;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store', 'unsubscribe', 'destroy']]);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->firstname = $request->input('firstname');
        $customer->surname = $request->input('surname');
        $customer->gender = $request->input('gender');
        $customer->country = $request->input('country');
        $customer->email = $request->input('email');
        $customer->save();

        return redirect('/');
    }

    public function index()
    {
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function unsubscribe()
    {
        return view('customers.unsubscribe');
    }

    public function destroy(Request $request)
    {
        $email = $request->input('email');
        $customer = Customer::where('email', $email)->first();
        if (empty($customer))
        {
            Session::flash('Error', 'This email is not on our subscriber list');
            return back();
        }
        $customer->delete();
        Session::flash('Message', 'You have succesfully unsubscribed from our newsletter.');

        return redirect('/');
    }
}
