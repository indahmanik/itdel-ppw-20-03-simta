<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{
    public function task()
    {
        return view('task');
    }

    public function addtask(Request $request)
    {
        Tasks::create([
            'team_id' => $request->team_id,
            'name_task' => $request->name_task,
            'submission_status' => $request->submission_status,
            'due_date' => $request->due_date,
            'time_task' => $request->time_task
        ]);
        
        return redirect('/listTask');
    } 
    
    public function deletetask($id) 
    {
        Tasks::where('task_id',$id)->delete();
        return redirect('/listTask');
    }

    public function edit($id)
    {
        $tasks = Tasks::where('task_id','like', $id)->get();
        return view('taskUpdate', compact('tasks'));
    }
    
    public function update(Request $request)
    {
        Tasks::where('task_id',$request->id)->update([
            'team_id' => $request->team_id,
            'name_task' => $request->name_task,
            'submission_status' => $request->submission_status,
            'due_date' => $request->due_date,
            'time_task' => $request->time_task
        ]);
        return redirect('/listTask');
    }

   function post(Request $request){
    $task = new Tasks;
    $task->task_id = $request->task_id;
    $task->team_id = $request->team_id;
    $task->name_task = $request->name_task;
    $task->submission_status = $request->submission_status;
    $task->due_date = $request->due_date;
    $task->time_task = $request->time_task;

    $task->save();

    return response()->json(
            [
                "message" => "Success",
                "data" => $task
            ]
        );
    }

    function get()
    {
        $data = Tasks::all();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }

    function getById($id)
    {
        $data = Tasks::where('task_id', $id)->get();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }

    function put($id, Request $request)
    {
        $task = Tasks::where('task_id', $id)->first();
        if($task){
            $task->team_id = $request->team_id ? $request->team_id : $task->team_id;
            $task->name_task = $request->name_task ? $request->name_task : $task->name_task;
            $task->submission_status = $request->submission_status ? $request->submission_status : $task->submission_status; 
            $task->due_date = $request->due_date ? $request->due_date : $task->due_date;
            $task->time_task = $request->time_task ? $request->time_task : $task->time_task;

            $task->save();
            return response()->json(
                [
                    "message" => "PUT Method Success",
                    "data" => $task
                ]
            );
        }
        return response()->json(
            [
                "message" => "Task with task_id " . $id . " not found"
            ], 400
        );
    }

    function delete($id)
    {
        $tasks = Tasks::where('task_id', $id)->first();
        if($tasks){
            $tasks->delete();
            return response()->json(
                [
                    "message" => "DELETE Task with task_id " . $id . " Success"
                ]
            );
        }
        return response()->json(
            [
                "message" => "Task with task_id " . $id . " not found"
            ], 400
        );
    }

}
