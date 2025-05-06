<?php

namespace App\Http\Controllers;

use App\Models\Mureed;

use Illuminate\Http\Request;

class MureedainController extends Controller
{
    /**
     * Display a listing of the resource.
     */     
    public function index(Request $request)
{
    $query = Mureed::query();

    // Apply search filter
    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', "%{$search}%")
              ->orWhere('cnic', 'like', "%{$search}%")
              ->orWhere('email', 'like', "%{$search}%");
        });
    }

    // Apply country filter
    if ($request->has('country') && $request->input('country') !== '') {
        $query->where('country', $request->input('country'));
    }
    // Apply city filter
    if ($request->has('city') && $request->input('city') !== '') {
        $query->where('city', $request->input('city'));
    }

    // Paginate results
    $mureeds = $query->paginate(10);

    // Fetch unique countries for the filter dropdown
    $countries = Mureed::distinct()->pluck('country')->sort();
    // Fetch unique cities for the filter dropdown
    $cities = Mureed::distinct()->pluck('city')->sort();

    return view('mureedain.index', compact('mureeds', 'countries', 'cities'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mureedain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'cnic' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'city' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'tehsil' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'contact_primary' => 'nullable|string|max:255',
            'contact_secondary' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'blood_group' => 'nullable|string|max:255',
            'job_business' => 'nullable|string|max:255',
            'nature_of_job_business' => 'nullable|string',
            'bayat_date' => 'nullable|date',
            'email' => 'nullable|email|max:255',
            'department_tdf' => 'nullable|string|max:255',
            'bayat_by' => 'nullable|string|max:255',
            'filled_by' => 'nullable|string|max:255',
            'signature' => 'nullable|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

         // Handle file upload
         if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('pictures', 'public');
            $validated['picture'] = $path; // No need to strip 'public/'
        }
        Mureed::create($validated);

        return redirect()->route('mureedain.index')->with('success', 'Record created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Fetch the record by ID
        $mureedain = Mureed::findOrFail($id);
    
        // Pass the data to the view
        return view('mureedain.show', compact('mureedain'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mureedain = Mureed::findOrFail($id);
        return view('mureedain.edit', compact('mureedain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mureedain = Mureed::findOrFail($id);
    
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'cnic' => 'required|string|max:255',
            'date_of_birth' => 'nullable|date',
            'city' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'tehsil' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'contact_primary' => 'nullable|string|max:255',
            'contact_secondary' => 'nullable|string|max:255',
            'qualification' => 'nullable|string|max:255',
            'blood_group' => 'nullable|string|max:255',
            'job_business' => 'nullable|string|max:255',
            'nature_of_job_business' => 'nullable|string',
            'bayat_date' => 'nullable|date',
            'email' => 'nullable|email|max:255',
            'department_tdf' => 'nullable|string|max:255',
            'bayat_by' => 'nullable|string|max:255',
            'filled_by' => 'nullable|string|max:255',
            'signature' => 'nullable|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Handle file upload
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('pictures', 'public');
            $validatedData['picture'] = $path; // No need to strip 'public/'
        }
    
        // Update the record
        $mureedain->update($validatedData);
    
        return redirect()->route('mureedain.index')->with('success', 'Record updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mureedain = Mureed::findOrFail($id);
        $mureedain->delete();
        return redirect()->route('mureedain.index')->with('success', 'Record deleted successfully.');
    }
}
