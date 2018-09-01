<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input as Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    //
    public function jstophp(){
        return view('pages.test.js2php');
    }

    public function jscallphpfunction(){
        return view('pages.test.jscallphpfunction');
    }
}
