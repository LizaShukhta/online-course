<?php

namespace App\Http\Controllers;

use App\Course;


class CourseController extends Controller
{
    public function getAll(){
		$objs=Course::all();
		return view('courses',compact('objs'));
	}

}
