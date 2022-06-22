<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdRequest;
use App\Models\Ad;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::orderByDesc('id')->paginate(15);
        return view('admin.ads.index', compact('ads'));
    }

    public function create()
    {
        return view('admin.ads.create');
    }

    public function store(AdRequest $request)
    {
        Ad::create($request->validated());
        return redirect()->route('ads.index')->with('success', 'Объявление успешно добавлено!');
    }

    public function edit(Ad $ad)
    {
        return view('admin.ads.edit', compact('ad'));
    }

    public function update(AdRequest $request, Ad $ad)
    {
        $ad->update($request->validated());
        return redirect()->route('ads.index')->with('success', 'Объявление успешно обновлено!');
    }

    public function destroy(Ad $ad)
    {
        $ad->delete();
        return redirect()->route('ads.index')->with('success', 'Объявление успешно удалено!');
    }
}
