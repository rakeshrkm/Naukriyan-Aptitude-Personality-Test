<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Centre;

class CentreController extends Controller
{
    public function index(Request $request){
        
        return view('admin.centre.centre-index');
    }

}
