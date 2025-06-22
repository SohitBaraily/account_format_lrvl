<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function home()
    {
        $compny = Company::first();
        return view('welcome');
    }
    public function journal()
    {
        return view('frontend.journal');
    }
    public function ledger()
    {
        return view('frontend.ledger');
    }
    public function trial_balance()
    {
        return view('frontend.trial-balance');
    }
    
}
