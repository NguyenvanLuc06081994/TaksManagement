<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        return view('tasks.index');
    }

    public function showCreate()
    {
        return view('tasks.create');
    }

    public function create(Request $request)
    {
        $task = [
            'name' => $request->name,
            'content' => $request->contents,
            'category' => $request->category
        ];
        return view('tasks.index', compact('task'));
//        return redirect()->route('tasks.index');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('tasks.detail',compact('id'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
