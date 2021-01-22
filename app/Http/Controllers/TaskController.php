<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // ここから
    public function index()
    {
        $tasks = auth()->user()->statuses()->with('tasks')->get();

        return view('tasks.index', compact('tasks'));
    }
    // ここまで
}
