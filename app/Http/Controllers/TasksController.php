<?php

namespace App\Http\Controllers;

use App\Task;
use App\Company;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $tasks = Task::where('user_id', Auth::user()->id)->get();

            return view('tasks.index', ['tasks' => $tasks]);
        }

        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($company_id = null )
    {
        if ($company_id == null ) {
            // $project_id == null
            $companies = Company::where('user_id', Auth::user()->id)->get();
            // $projects = Project::where('user_id', Auth::user()->id)->get();
        } elseif ($company_id !== null ) {
            $companies = null;  
        }

        return view('tasks.create', ['company_id' => $company_id,
                                    'companies' => $companies]);
                                    // 'project_id' => $project_id,
                                    // 'projects' => $projects, ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Task $task
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Task $task
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Task                $task
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Task $task
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
    }
}
