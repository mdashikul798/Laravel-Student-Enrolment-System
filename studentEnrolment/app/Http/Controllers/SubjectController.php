<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class SubjectController extends Controller
{
    public function accounting(){
    	$allStudent = DB::table('add_students')
        ->where(['add_students.department'=>1])
        ->get();

        return view('pages.allStudent', ['allStudent' => $allStudent]);
    }

    public function computer(){
    	$allStudent = DB::table('add_students')
        ->where(['add_students.department'=>2])
        ->get();

        return view('pages.allStudent', ['allStudent' => $allStudent]);
    }

    public function mathematic(){
    	$allStudent = DB::table('add_students')
        ->where(['add_students.department'=>3])
        ->get();

        return view('pages.allStudent', ['allStudent' => $allStudent]);
    }

}
