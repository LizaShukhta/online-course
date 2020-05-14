<?php

namespace App\Http\Controllers;

use App\Exercise;


class ExerciseController extends Controller
{
	 public function getAll($id){
		$objs=Exercise::where ('course_id', $id)->get();
		return view('course',compact('objs'));
	}
}
