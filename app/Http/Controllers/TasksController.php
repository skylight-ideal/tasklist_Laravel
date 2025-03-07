<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Task;
use App\Models\Task;

use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks.index',['tasks' => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
        $validator = Validator::make($request->all(),[
         'title' => 'required|max:255',
        ]);

        if($validator->fails()){
            return redirect('/')
              ->withInput()
              ->withErrors($validator);
        }

        $task = new Task;
        $task->title = $request->title;
        $task->save();

        return redirect('/'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(string $id)
    public function destroy($id)
    {
        //
        Task::findOrFail($id)->delete();
        return redirect('/');
    }
}
