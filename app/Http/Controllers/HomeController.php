<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PeopleRequest;

use Auth;

use App\Person;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$objs=Person::orderBy('id', 'DESC')->paginate(10);
        return view('home', compact('objs'));
    }
	
	public function getDelete($id=null)
    {
		$obj=Person::find($id);
		$obj->delete();
		return redirect()->back();
    }
	
	public function postIndex(PeopleRequest $r)
    {
		$r['user_id']=(Auth::guest())?'0':Auth::user()->id;
		Person::create($r->all());
		return redirect()->back();/* redirect(' '); */
    }
}
