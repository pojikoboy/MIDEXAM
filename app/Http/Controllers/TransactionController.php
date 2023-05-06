<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $greetingTime = FrontendController::getGreeting();
        $user = FrontendController::getUser();
        $transactions = Transaction::where('user_id', $user->id)->get();
        return view('frontend.transaction', compact('greetingTime', 'user', 'transactions'));
    }
}
