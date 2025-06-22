<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $socials = Social::all();
        $company = Company::first();

        View::share([
            'company' => $company,
            'socials' => $socials,
        ]);
    }
}
