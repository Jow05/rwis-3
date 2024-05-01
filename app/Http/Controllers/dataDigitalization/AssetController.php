<?php

namespace App\Http\Controllers\dataDigitalization;

use App\Http\Controllers\Controller;
use App\Models\AssetModel;
use App\Models\HouseholdModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Auth::check() ? view('data-digitalization.asset.index') : redirect('/login');
    }

    public function archived()
    {
        return Auth::check() ? view('data-digitalization.asset.archived') : redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $household = HouseholdModel::all();
        return Auth::check() ? view('data-digitalization.asset.create', ['household' => $household]) : redirect('/login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'household_id' => 'required',
            'name' => 'required',
        ]);

        AssetModel::create([
            'household_id' => $request->household_id,
            'name' => $request->name,
            'is_archived' => false
        ]);

        return redirect('/asset')->with('success', 'Asset has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $asset = AssetModel::with('household')->find($id);
        return Auth::check() ? view('data-digitalization.asset.show', ['asset' => $asset]) : redirect('/login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $household = HouseholdModel::all();
        $asset = AssetModel::find($id);
        return Auth::check() ? view('data-digitalization.asset.edit', ['household' => $household, 'asset' => $asset]) : redirect('/login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'household_id' => 'required',
            'name' => 'required',
        ]);

        AssetModel::find($id)->update([
            'household_id' => $request->household_id,
            'name' => $request->name,
            'is_archived' => false
        ]);

        return redirect('/asset')->with('success', 'Asset has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}