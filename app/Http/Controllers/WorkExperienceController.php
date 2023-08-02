<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreWorkExperienceRequest;
use App\Http\Requests\UpdateWorkExperienceRequest;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backoffice.work_experiences.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkExperienceRequest $request)
    {
        // dd($request->input());
        $storeDate = [
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'designation' => $request->get('designation'),
            'company_name' => $request->get('company_name'),
            'city_name' => $request->get('city_name'),
            'website' => $request->get('website'),
        ];
    
        if ($request->hasFile('logo')) {
            $fileName = $request->file('logo') . time();
            $articleFileName = $fileName . '.' . $request->file('logo')->getClientOriginalExtension();
            $storeDate['logo'] = Storage::putFileAs(
                '/logos',
                $request->file('logo'),
                $articleFileName
            );
        }
        // dd($storeDate);

        

        if(WorkExperience::create($storeDate)){
            return redirect()
                ->route('work_experiences.index')
                ->with('SUCCESS','Work Experience created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkExperience $workExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkExperience $workExperience)
    {
        $data['work_experience'] = $workExperience;

        return view('backoffice.work_experiences.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkExperienceRequest $request, WorkExperience $workExperience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkExperience $workExperience)
    {
        //
    }
}
