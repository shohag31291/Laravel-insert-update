<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

use App\course;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alldata=course::orderBy('course_title');
        $course_title=$request->input('course_code');
        $course_title=$request->input('course_title');

        if(!empty($course_code)){

            $alldata->Where('course_code','LIKE','%'.$course_code.'%');
        }

        if(!empty($course_title)){

            $alldata->Where('course_title','LIKE','%'.$course_title.'%');
        }
        $alldata=$alldata->paginate(5);
        return view('course.index',compact('alldata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
        check the user code
            $user = Auth::user();
            $user->id;
            return $user->i;
    */
    public function create()
    {
        if (Auth::check()) {
            return view('course.create');
        }
        return redirect('auth/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input = $request->all();
         course::create($input);
         return redirect('course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alldata=Course::paginate(5);
        return view('course.search',compact('alldata'));
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=course::findOrFail($id);
        return view('course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = course::findOrFail($id);
        $data->update($input);
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = course::findOrFail($id);
        $data->delete();
        return redirect('course');
    }
}
