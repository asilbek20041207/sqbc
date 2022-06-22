<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function index()
    {
        $licenses = License::orderByDesc('id')->paginate(15);
        return view('admin.licenses.index', compact('licenses'));
    }

    public function create()
    {
        return view('admin.licenses.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,png']
        ]);

        $attributes['image'] = $request->file('image')->store('licenses');

        License::create($attributes);

        return redirect()->route('licenses.index')->with('success', 'Лицензия успешно добавлена!');
    }

    public function destroy(License $license)
    {
        unlink(public_path('storage/' . $license->image));
        $license->delete();

        return redirect()->route('licenses.index')->with('success', 'Лицензия успешно удалена!');
    }
}
