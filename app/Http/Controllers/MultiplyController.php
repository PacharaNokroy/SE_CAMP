<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplyController extends Controller
{
    public function multiply(Request $req){
        $num = $req->input('number');

        return redirect('/multiple')->with('multiplier', $num);
    }
}
