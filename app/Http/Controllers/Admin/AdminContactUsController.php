<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Localization;
use Illuminate\Http\Request;

class AdminContactUsController extends Controller
{
    public function index(){
        $contacts=ContactUs::latest()->paginate(7);
        $lang = Localization::where('user_id', auth()->user()->id)->first();
        
        return view('admin.contact_us.view_contact_us',compact('contacts','lang'));
    }
}