<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects()->orderBy('updated_at', 'desc')->get();
        return view('projects.index', compact('projects'));
    }
    public function darkIndex()
    {
        $projects = auth()->user()->projects()->orderBy('updated_at', 'desc')->get();

        $done_tasks = $projects->where('completed', 1);
        $daily_percent = round($done_tasks->count() / $projects->count() * 100);

        
        return view('dashboard-dark', compact('projects', 'daily_percent'));
    }
    public function create()
    {
        return view('projects.create');
    }

    public function show(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.show', compact('project'));
    }

    public function store()
    {
        $project = auth()->user()->projects()->create($this->validateRequest());

        if ($tasks = request('tasks')) {
            $project->addTasks($tasks);
        }

        if (request()->wantsJson()) {
            return ['message' => 'dashboard'];
            // return ['message' => $project->path()];
        }
        dd($project);
        return redirect('dashboard');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        // return $this->validateRequest();
        request('completed') ? $project->complete() : $project->incomplete();
        return redirect('/dashboard-dark');
        // $this->authorize('update', $project);
        // $project->update($this->validateRequest());
        // return redirect($project->path());
    }

    public function complete(Project $project)
    {
        request('completed') ? $project->complete() : $project->incomplete();

        return redirect($project->path());
    }

    public function destroy(Project $project)
    {
        $this->authorize('manage', $project);
        $project->delete();
        return redirect('/projects');
    }

    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'color' => 'nullable',
            'notes' => 'nullable'
        ]);
    }
}
