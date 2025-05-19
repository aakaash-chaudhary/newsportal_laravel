<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function home()
    {
        $company = Company::first();
        View::share([
            'company'=> $company

        ]);


        return view('frontend.home');
    }
}
