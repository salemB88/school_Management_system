<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Grade;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $classRooms=ClassRoom::all();

        $grades=Grade::all();
     return view('classRoom.classRoom',compact('classRooms','grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades=Grade::all();
    return view('classRoom.add',compact('grades'));
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
            'name' => 'required|unique:class_rooms',
        ],
            [
                'name.required' => __('Please enter the name of the class room'),
            ]);

        ClassRoom::create([
           'name'=>$request->name,
           'grade_id' =>$request->grade_id,
            'description'=>$request->description,
        ]);

        session()->flash('success', __('Add class room successful'));
        return redirect('/class_room');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function show(ClassRoom $classRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassRoom $classRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $classRoom=ClassRoom::findOrFail($request->id);

        $validated = $request->validate([
            'name' => 'required|unique:class_rooms,name,'.$request->id,
        ],
            [
                'name.required' => __('Please enter the name of the class room'),
            ]);

        $classRoom->update($request->all());

        session()->flash('success', __('Update class room successful'));
        return redirect('/class_room');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassRoom  $classRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $classRoom=ClassRoom::findOrFail($request->id);



        //prevent delete action if the classroom have secion
        if (count($classRoom->sections) > 0) {
            session()->flash('error', __('Sorry, can not delete if there section in class room'));
            return redirect('/class_room');

        } else {
            $classRoom->delete();
            session()->flash('success', __('Delete class room successful'));
            return redirect('/class_room');
        }



    }


}
