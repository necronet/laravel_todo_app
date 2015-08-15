<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    function about() {

        $first='Jose';
        $last='Ayerdis';

        return view('about')->with(['first'=>$first,'last'=>$last]);
        //return view('about')->with(compact('first','last'));
        //return view('about', compact('first','last'));
    }
}
