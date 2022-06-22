<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInformationRequest;
use App\Http\Requests\UpdateInformationRequest;
use App\Models\Information;

class InformationController extends Controller
{
	public function index()
	{
		$information = Information::first();
		return view('admin.information.index', compact('information'));
	}

	public function create()
	{
		return view('admin.information.create');
	}

	public function store(StoreInformationRequest $request)
	{
		$attributes = $request->validated();

		for ($i = 1; $i <= 4; $i++) {
			$image = 'image' . $i;
			$attributes[$image] = $request->file($image)->store('information');
		}

		$attributes['charter'] = $request->file('charter')->store('information');
		$attributes['company_structure_ru'] = $request->file('company_structure_ru')->store('information');
		$attributes['company_structure_uz'] = $request->file('company_structure_uz')->store('information');
		$attributes['supervisory_board'] = $request->file('supervisory_board')->store('information');

		Information::create($attributes);

		return redirect()->route('information.index')->with('success', 'Информация о компании успешно добавлена!');
	}

	public function edit(Information $information)
	{
		return view('admin.information.edit', compact('information'));
	}

	public function update(UpdateInformationRequest $request, Information $information)
	{
		$attributes = $request->validated();

		for ($i = 1; $i <= 4; $i++) {
			$image = 'image' . $i;
			$attributes[$image] = $information->updateFile($request, $image);
		}

		$attributes['charter'] = $information->updateFile($request, 'charter');
		$attributes['company_structure_ru'] = $information->updateFile($request, 'company_structure_ru');
		$attributes['company_structure_uz'] = $information->updateFile($request, 'company_structure_uz');
		$attributes['supervisory_board'] = $information->updateFile($request, 'supervisory_board');

		$information->update($attributes);

		return redirect()->route('information.index')->with('success', 'Информация о компании успешно добавлена!');
	}

	public function destroy(Information $information)
	{
		$information->deletInformation();
		return redirect()->route('information.index')->with('success', 'Информация о компании успешно удалена!');
	}
}
