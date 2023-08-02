<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreWorkExperienceRequest;
use App\Http\Requests\UpdateWorkExperienceRequest;

class WorkExperienceController extends Controller
{
    public function index()
    {
        $data['title'] = __("Work Experiences");
        $data['workExperiences'] = WorkExperience::orderByDESC('created_at')->paginate();

        return view('backoffice.work-experiences.index', $data);
    }

    public function create()
    {
        $data['title'] = __("Create Work Experience");

        return view("backoffice.work-experiences.create", $data);
    }

    public function store(StoreWorkExperienceRequest $request)
    {
        $storeDate = [
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'designation' => $request->get('designation'),
            'company_name' => $request->get('company_name'),
            'city_name' => $request->get('city_name'),
            'website' => $request->get('website'),
        ];

        if ($request->hasFile('logo')) {
            $fileName = $request->get('company_name');
            $logoName = $fileName . '.' . $request->file('logo')->getClientOriginalExtension();
            $storeDate['logo'] = Storage::putFileAs(
                '/logos',
                $request->file('logo'),
                $logoName
            );
        }

        if (WorkExperience::create($storeDate)) {
            return redirect()
                ->route('work-experiences.index')
                ->with('SUCCESS', 'Work Experience created successfully.');
        }

        return redirect()->back()->with('ERROR', 'Something went wrong.');
    }

    public function edit(WorkExperience $workExperience)
    {
        $data['title'] = __("Edit Work Experience");
        $data['workExperience'] = $workExperience;

        return view('backoffice.work-experiences.edit', $data);
    }

    public function update(UpdateWorkExperienceRequest $request, WorkExperience $workExperience)
    {
        $updateDate = [
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'designation' => $request->get('designation'),
            'company_name' => $request->get('company_name'),
            'city_name' => $request->get('city_name'),
            'website' => $request->get('website'),
        ];

        if ($request->hasFile('logo')) {
            if ($workExperience->logo) {
                Storage::delete($workExperience->logo);
            }

            $fileName = $request->get('company_name');
            $logoName = $fileName . '.' . $request->file('logo')->getClientOriginalExtension();
            $updateDate['logo'] = Storage::putFileAs(
                '/logos',
                $request->file('logo'),
                $logoName
            );
        }

        if ($workExperience->update($updateDate)) {
            return redirect()
                ->route('work-experiences.index')
                ->with('SUCCESS', 'Work Experience updated successfully.');
        }

        return redirect()->back()->with('ERROR', 'Something went wrong.');
    }

    public function destroy(WorkExperience $workExperience)
    {
        if ($workExperience->logo) {
            Storage::delete($workExperience->logo);
        }

        if ($workExperience->delete()) {
            return redirect()
                ->route('work-experiences.index')
                ->with('SUCCESS', 'Work Experience deleted successfully.');
        }

        return redirect()->back()->with('ERROR', 'Something went wrong.');
    }
}
