<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Localization;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        
        return view('admin.dashboard',compact('lang'));
    }
}