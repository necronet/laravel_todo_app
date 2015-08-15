<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    function about() {

        $people = ['Alba Rosa', 'Claudia Ayerdis', 'John Oliver'];
        $first='Jose';
        $last='Ayerdis';

        return view('about')->with(['first'=>$first,'last'=>$last, 'people'=>$people]);
        //return view('about')->with(compact('first','last'));
        //return view('about', compact('first','last'));
    }
}
