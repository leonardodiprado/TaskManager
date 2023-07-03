<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
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
     */
    public function store(Request $request)
    {
        $taskData = [
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ];

        DB::table('tasks')->insert($taskData);
        
        return response()->json(['status'=> 'sucess'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tasks = Task::find($id);

        if (!$tasks) {
            return response()->json(['message'=>'Tarefa não encontrada'], 404);
        }
        return response()->json($tasks);
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
         $taskData = DB::table('tasks')->where('id', $id)->update([
             'title' => $request->title,
            'description' => $request->description,
             'status' => $request->status,
         ]);
    
        return response()->json(['status'=> 'sucess'],200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id)->delete();
        
        return response()->json(['status' => 'success'], 204);
    }
    
}