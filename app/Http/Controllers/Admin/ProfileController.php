<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Localization;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        
        return view('admin.user.profile',compact('lang'));
    }
}