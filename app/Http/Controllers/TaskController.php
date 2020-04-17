<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('mainPage',['tasks'=>$tasks]);
    }

    public function edit($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('add');
    }

    public function destroy ($id){
        $tasks = Task::find($id);
        $tasks->delete();
        return redirect()->route('mainPage');
    }

    public function createTask(Request $request) {
        $task = new Task();
        $task -> title = $request->input('title');
        $task -> save();
        return redirect()->route('mainPage');
    }
}
