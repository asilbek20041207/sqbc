<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use App\Models\Social;

class SocialController extends Controller
{
    public function index()
    {
        $social = Social::first();
        return view('admin.socials.index', compact('social'));
    }

    public function create()
    {
        return view('admin.socials.create');
    }

    public function store(SocialRequest $request)
    {
        Social::create($request->validated());
        return redirect()->route('socials.index')->with('success', 'Соц. сети успешно добавлены');
    }

    public function edit(Social $social)
    {
        return view('admin.socials.edit', compact('social'));
    }

    public function update(SocialRequest $request, Social $social)
    {
        $social->update($request->validated());
        return redirect()->route('socials.index')->with('success', 'Соц. сети успешно обновлены');
    }

    public function destroy(Social $social)
    {
        $social->delete();
        return redirect()->route('socials.index')->with('success', 'Соц. сети успешно удалены');
    }
}
