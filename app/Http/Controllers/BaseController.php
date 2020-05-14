<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;

class BaseController extends Controller
{
    public function getIndex(){
		return view('index');
	}
	public function getStatic($url=null){
		$obj = Maintext::where('url',$url)->first();
		return view('static', compact('obj'));
	}
}
