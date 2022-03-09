<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\profile;

class ProfileController extends Controller
{
     public function profile(){
    	return view('admin.profile');
    }

}