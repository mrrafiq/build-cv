<?php

namespace App\Http\Controllers;

use App\Models\CreateCV;
use Illuminate\Http\Request;

class CreateCVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createcv.index');
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
                'name' => 'required',
                'email' => 'required|unique:create_cv,email,except,id',
                'phone' => 'required|unique:create_cv,phone,except,id',
                'address' => 'required',
                'portfolio_url' => 'required',
                'summary' => 'required',
                'skills' => 'required',
            ]);
            if($validation){
                $createcv = new CreateCV();
                $createcv->name = $request->name;
                $createcv->email = $request->email;
                $createcv->phone = $request->phone;
                $createcv->address = $request->address;
                $createcv->portfolio_url = $request->portfolio_url;
                $createcv->summary = $request->summary;
                $createcv->skills = $request->skills;
                $createcv->save();
                return redirect()->route('createcv.school')->with('success', 'CV Created Successfully');
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
     * @param  \App\Models\CreateCV  $createCV
     * @return \Illuminate\Http\Response
     */
    public function show(CreateCV $createCV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateCV  $createCV
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateCV $createCV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateCV  $createCV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateCV $createCV)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateCV  $createCV
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateCV $createCV)
    {
        //
    }
}
