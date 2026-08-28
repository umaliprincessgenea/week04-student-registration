<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $registrations = Student::latest()->get();
        return view('pages.saved-registrations', compact('registrations'));
    }

    public function create()
    {
        return view('pages.registration');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|unique:students,student_id',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'mobile_number' => 'required|string|max:15',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'program' => 'required|string',
            'year_level' => 'required|integer',
            'address' => 'required|string',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $validated['profile_picture'] = $path;
        }

        // Map 'dob' to 'date_of_birth' for DB
        $validated['date_of_birth'] = $validated['dob'];
        unset($validated['dob']);

        Student::create($validated);

        return redirect()->route('registration.index')->with('success', 'Student registered successfully!');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return response()->json($student);
    }
}