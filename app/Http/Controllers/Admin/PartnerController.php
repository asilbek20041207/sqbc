<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderByDesc('id')->paginate(15);
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'image' => ['required', 'image', 'mimes:svg,png']
        ]);

        $attributes['image'] = $request->file('image')->store('partners');

        Partner::create($attributes);

        return redirect()->route('partners.index')->with('success', 'Партнер успешно добавлен!');
    }

    public function destroy(Partner $partner)
    {
        unlink(public_path('storage/' . $partner->image));
        $partner->delete();

        return redirect()->route('partners.index')->with('success', 'Партнер успешно удален!');
    }
}
