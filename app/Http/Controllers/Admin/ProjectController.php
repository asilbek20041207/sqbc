<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderByDesc('id')->paginate(15);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(StoreProjectRequest $request)
    {
        $attributes = $request->validated();
        $attributes['image'] = $request->file('image')->store('projects');

        Project::create($attributes);

        return redirect()->route('projects.index')->with('success', 'Проект успешно добавлен!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $attributes = $request->validated();

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['required', 'image', 'mimes:jpg']
            ]);

            unlink(public_path('storage/' . $project->image));
            $attributes['image'] = $request->file('image')->store('projects');
        }

        $project->update($attributes);

        return redirect()->route('projects.index')->with('success', 'Проект успешно обновлен!');
    }

    public function destroy(Project $project)
    {
        unlink(public_path('storage/' . $project->image));
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Проект успешно удален!');
    }
}
