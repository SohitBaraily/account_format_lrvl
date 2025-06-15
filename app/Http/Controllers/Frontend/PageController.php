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
}
