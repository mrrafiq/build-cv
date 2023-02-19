<?php

namespace App\Http\Controllers;

use App\Models\UserCourse;
use Illuminate\Http\Request;

class UserCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validation = $request->validate([
                'course_title' => 'required',
                'course_company' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'serial' => 'required',
            ]);
            if($validation){
                $createcv = new UserCourse();
                $createcv->course_title = $request->course_title;
                $createcv->course_company = $request->course_company;
                $createcv->start_date = $request->start_date;
                $createcv->end_date = $request->end_date;
                $createcv->serial = $request->serial;
                $createcv->save();
                return redirect()->route('createcv.result');
            }else{
                return redirect()->route('createcv.index')->with('error', 'Something went wrong');
            }
        } catch (\Throwable $th) {
            return redirect()->route('createcv.index')->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCourse  $userCourse
     * @return \Illuminate\Http\Response
     */
    public function show(UserCourse $userCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCourse  $userCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCourse $userCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserCourse  $userCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCourse $userCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCourse  $userCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCourse $userCourse)
    {
        //
    }
}
