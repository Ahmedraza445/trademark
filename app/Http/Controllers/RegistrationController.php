<?php

namespace App\Http\Controllers;

use App\Models\TradeMarkOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Mail\OrderUpdated;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{

    public function step1($userID)
    {
        $user = User::find($userID);

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }
        return view('registration.step1', compact('user'));
    }

    public function postStep1(Request $request)
    {
        $uploadPath = 'public/uploads';

        if(!empty($request->file('tr_logo'))) {
            $uploadedFile = $request->file('tr_logo') ?? 0;
    
            $filename = uniqid() . '_' . $uploadedFile->getClientOriginalName();
    
            $path = $uploadedFile->storeAs($uploadPath, $filename, 'public');
            
            $order = TradeMarkOrder::create([
                'tr_name' => $request->input('tr_name') ?? 0,
                'tr_slogan' => $request->input('tr_slogan') ?? 0,
                'industry' => $request->input('industry'),
                'products' => $request->input('product_desc'),
                'type_of_business' => $request->input('business_size'),
                'us_based' => $request->input('us_based'),
                'packageName' => '',
                'packagePrice' => '',
                'serviceName' => '',
                'servicePrice' => '',
                't_Price' => '',
                'card' => '',
                'cardName' => '',
                'cardNumber' => '',
                'cvc' => '',
                'expiry' => '',
                'zipCode' => '',
                'country' => '',
                'province' => '',
                'city' => '',
                'address' => '',
                'tr_logo' => $path,
                'user_id' => $request->session()->get('user_id')
            ]);
        } else {
            $order = TradeMarkOrder::create([
                'tr_name' => $request->input('tr_name') ?? 0,
                'tr_slogan' => $request->input('tr_slogan') ?? 0,
                'industry' => $request->input('industry'),
                'products' => $request->input('product_desc'),
                'type_of_business' => $request->input('business_size'),
                'us_based' => $request->input('us_based'),
                'packageName' => '',
                'packagePrice' => '',
                'serviceName' => '',
                'servicePrice' => '',
                't_Price' => '',
                'card' => '',
                'cardName' => '',
                'cardNumber' => 0,
                'cvc' => 0,
                'expiry' => '',
                'zipCode' => 0,
                'country' => '',
                'province' => '',
                'city' => '',
                'address' => '',
                'tr_logo' => $request->file('tr_logo')?? 0,
                'user_id' => $request->session()->get('user_id')
            ]);
        }

        Session::put('order_id', $order->order_id);

        $user = $request->session()->get('user_id');
        return redirect()->route('register.step2', ['userID' => $user]);
    }

    public function step2($userID)
    {
        $user = User::find($userID);

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }
        return view('registration.step2', compact('user'));
    }

    public function postStep2(Request $request)
    {
        $order_id = $request->session()->get('order_id');
        $order = TradeMarkOrder::where('order_id', $order_id)->first();
        if($order) {
            $order->update([
                'packageName' => $request->input('packageName'),
                'packagePrice' => $request->input('packagePrice'),
                'serviceName' => $request->input('serviceName'),
                'servicePrice' => $request->input('servicePrice'),
                't_Price' => $request->input('totalPrice'),
                'card' => '',
                'cardName' => '',
                'cardNumber' => 0,
                'cvc' => 0,
                'expiry' => '',
                'zipCode' => 0,
                'country' => '',
                'province' => '',
                'city' => '',
                'address' => '',
            ]);
        }
        return redirect()->route('register.step3', ['order_id' => $order_id]);
    }

    public function step3()
    {
        $order_id = session('order_id');
        $trademark = TradeMarkOrder::find($order_id);
        return view('registration.step3', compact('trademark'));
    }

    public function postStep3(Request $request)
    {
        $order_id = $request->session()->get('order_id');
        $order = TradeMarkOrder::where('order_id', $order_id)->first();
        if($order) {
            $order->update([
                'card' => $request->input('card'),
                'cardName' => $request->input('cardName'),
                'cardNumber' => $request->input('cardNumber'),
                'cvc' => $request->input('cvc'),
                'expiry' => $request->input('expiry'),
                'country' => $request->input('country'),
                'province' => $request->input('province'),
                'city' => $request->input('city'),
                'zipCode' => $request->input('zipCode'),
                'address' => $request->input('address'),
                'created_at' => null,
                'updated_at' => null
            ]);
            // dd($order);
            // Mail::to('ahmedrazay.123@gmail.com')->send(new OrderUpdated($order));
        };
        return view('layouts.thankyou');
    }

    public function thankyou() {


        $data = [
            'message' => 'This is the content of my custom email.',
        ];

        if($data && is_array($data)){
            Mail::to('ahmedrazay.123@gmail.com')->send(new OrderUpdated($data));
            return "Email sent successfully!";
        } else{
            return "Email not sent successfully!";
        }



        // $order_id = session('order_id');
        // $data = TradeMarkOrder::join('users', 'trademark_orders.user_id', '=', 'users.id')
        //     ->where('trademark_orders.order_id', $order_id)
        //     ->first();

        // return view('layouts.thankyou');
    }

    public function sendEmail()
    {
        $user = (object)[
            'name' => 'John Doe',
            'email' => 'ahmedrazay.123@gmail.com',
        ];


        // dd($user);

         // provide user data
        Mail::to($user->email)->send(new TestMail($user));
    // Additional logic or response handling here
    }
}
