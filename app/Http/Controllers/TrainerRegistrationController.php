<?php

namespace App\Http\Controllers;

use App\Models\TrainerRegistration;
use Illuminate\Http\Request;

class TrainerRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainer = TrainerRegistration::latest()->get();
        return view('index', compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|max:100',
        'email' => 'required|email|max:50|unique:trainer_registrations,email',
        'specialization' => 'required'
    ]);

    TrainerRegistration::create($request->all());

    return redirect()->route('trainer-registrations.index')
        ->with('success', 'Trainer registered successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(TrainerRegistration $trainer)
    {
        return view('show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrainerRegistration $trainer)
    {
        return view('edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TrainerRegistration $trainer)
    {
        $request->validate([
        'name' => 'required|max:100',
        'email' => 'required|email|max:50|unique:trainer_registrations,email,' . $trainer->id,
        'specialization' => 'required'
    ]);

    $trainer->update($request->all());

    return redirect()->route('trainer-registrations.index')
        ->with('success', 'Trainer updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrainerRegistration $trainer)
    {
        $trainer->delete();

        return redirect()->route('trainer-registrations.index')->with('success', 'Trainer deleted successfully.');
    }
}
