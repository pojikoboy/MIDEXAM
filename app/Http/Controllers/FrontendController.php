<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coffee;
use App\Models\Transaction;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    public static function getGreeting()
    {
        $currentTime = Carbon::now('GMT+5')->format('H'); 

        $greetingTime = '';

        if($currentTime < 4)
        {
            $greetingTime = 'Good Evening';
        }
        else if($currentTime < 12)
        {
            $greetingTime = 'Good Morning';
        }
        else if($currentTime < 18)
        {
            $greetingTime = 'Good Afternoon';
        }
        else 
        {
            $greetingTime = 'Good Evening';
        }

        return $greetingTime;
    }

    public static function getUser()
    {
        return User::where('id', 3)->first();
    }

    public function index()
    {
        $greetingTime = $this->getGreeting();
        $user = $this->getUser();
        return view('frontend.index', compact('greetingTime', 'user'));
    }

    public function brewCoffee()
    {
        $greetingTime = $this->getGreeting();
        $coffees = Coffee::all();
        $user = $this->getUser();
        return view('frontend.coffee', compact('greetingTime', 'coffees', 'user'));
    }

    public function orderCoffee(int $coffeeID)
    {
        $coffee = Coffee::findOrFail($coffeeID);

        if($coffee)
        {
            $transaction = new Transaction;
            $transaction->user_id = 3;
            $transaction->coffee_id = $coffeeID;

            $transaction->save();
    
            return redirect()->back()->with('toast_success', 'Order Success');
        }else{
            return redirect()->back()->with('toast_error', 'Somethings Wrong');
        }
    }
}
