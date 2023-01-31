<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections=Section::all();
        $grades=Grade::all();
        $classRooms=ClassRoom::all();
        $teachers=Teacher::all();
        return  view('sections.sections',compact('sections','grades','classRooms','teachers'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'name' => 'required|unique:sections',
            'status' => 'required',
            'classRoom_id' => 'required',
        ],
            [
                'name.required' => __('Please enter the name of the section'),
            ]);

        Section::create([
            'name'=>$request->name,
            'status'=>$request->status,
            'classRoom_id'=>$request->classRoom_id,
        ]);

        session()->flash('success', __('Add Section successful'));
        return redirect('/section');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {

return view('classRoom.show',compact('section'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Section $section, Request $request)
    {




        $validated = $request->validate([
            'name' => 'required|unique:sections,name,'.$section->id,
            'status' => 'required',
            'classRoom_id' => 'required',
        ],
            [
                'name.required' => __('Please enter the name of the section'),
            ]);

        $section->update([
            'name'=>$request->get('name'),
            'status'=>$request->get('status'),
            'classRoom_id'=>$request->get('classRoom_id'),
        ]);
        $section->teachers()->sync($request->teachers);
        session()->flash('success', __('Update Section successful'));
        return redirect('/section');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $section=Section::findOrFail($request->id);

        //prevent delete action if the section have student
        if (false) {
            session()->flash('error', __('Sorry, can not delete if there class room in grade'));
            return redirect('/grade');

        } else {
            $section->delete();
            session()->flash('success', __('Delete Section successful'));
            return redirect('/section');
        }
    }
}
