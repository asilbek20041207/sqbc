<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contacts.index', compact('contact'));
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('contacts.index')->with('success', 'Контакты успешно добавлены!');
    }

    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());
        return redirect()->route('contacts.index')->with('success', 'Контакты успешно обновлены!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Контакты успешно удалены!');
    }
}
