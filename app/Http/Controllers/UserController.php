<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderUpdated;
use App\Models\TradeMarkOrder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $trademark = TradeMarkOrder::with('user')->orderBy('order_id', 'desc')->get();

       $user = User::orderBy('id', 'desc')->get();

       return view('adminPortal', ['trademark' => $trademark, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('abc');
        return view('home.content1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('contact') . $request->input('remainingNumbers');
        $user->registration_status = '1';
        $user->save();
        Session::put('user_id', $user->id);
        return redirect()->route('register.step1', ['userID' => $user->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
