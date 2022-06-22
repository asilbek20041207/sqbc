<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CounterRequest;
use App\Models\Counter;

class CounterController extends Controller
{
    public function index()
    {
        $counter = Counter::first();
        return view('admin.counters.index', compact('counter'));
    }

    public function create()
    {
        return view('admin.counters.create');
    }

    public function store(CounterRequest $request)
    {
        Counter::create($request->validated());
        return redirect()->route('counters.index')->with('success', 'Счетчики успешно добавлены!');
    }

    public function edit(Counter $counter)
    {
        return view('admin.counters.edit', compact('counter'));
    }

    public function update(CounterRequest $request, Counter $counter)
    {
        $counter->update($request->validated());
        return redirect()->route('counters.index')->with('success', 'Счетчики успешно обновлены!');
    }

    public function destroy(Counter $counter)
    {
        $counter->delete();
        return redirect()->route('counters.index')->with('success', 'Счетчики успешно удалены!');
    }
}
