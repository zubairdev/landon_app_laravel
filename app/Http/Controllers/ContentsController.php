<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    public function home() 
    {
    	$data = [];
    	$data['version'] = '0.1.2';
    	return view('contents/home', $data);
    }
}
