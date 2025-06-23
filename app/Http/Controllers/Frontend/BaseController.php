<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Social;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $subscriptions = Subscription::all();
        $socials = Social::all();
        $company = Company::first();

        View::share([
            'company' => $company,
            'socials' => $socials,
            'subscriptions' => $subscriptions,
        ]);
    }
}
