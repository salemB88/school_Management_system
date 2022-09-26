<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $grades=Grade::all();

      return view('grades.grades',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grades.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:grades',
        ],
            [
                'name.required' => __('Please enter the name of the grade'),
            ]);

Grade::create([
   'name'=>$request->name,
    'description'=>$request->description
]);

        session()->flash('success', __('Add grade successful'));
        return redirect('/grade');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $grade=Grade::findOrFail($request->id);

        $validated = $request->validate([
            'name' => 'required|unique:grades,name,'.$request->id,
        ],
            [
                'name.required' => __('Please enter the name of the grade'),
            ]);

        $grade->update($request->all());
        session()->flash('success', __('Update grade successful'));
        return redirect('/grade');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $grade=Grade::findOrFail($request->id);

      $grade->delete();
        session()->flash('success', __('Delete grade successful'));
        return redirect('/grade');
    }
}
