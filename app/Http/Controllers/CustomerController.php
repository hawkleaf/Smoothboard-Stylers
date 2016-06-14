<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store', 'delete', 'destroy']]);
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

    public function destroy($customerId)
    {
        $customer = Customer::findOrFail($customerId);
        $customer->delete();
    }
}
