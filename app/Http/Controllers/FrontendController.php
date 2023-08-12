<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\RecentWork;
use Illuminate\Http\Request;
use App\Models\WorkExperience;

class FrontendController extends Controller
{
    public function index()
    {
        $data['title'] = __("iamsabbiralam");
        $data['workExperiences'] = WorkExperience::orderByDESC('created_at')->get();
        $data['recentWorks'] = RecentWork::orderByDESC('created_at')->get();

        return view('welcome', $data);
    }

    public function portfolio($id)
    {
        $data['title'] = 'Single portfolio';
        $data['portfolio'] = RecentWork::where('id', $id)->first();

        return view('frontoffice.portfolio.show', $data);
    }

    public function contact()
    {
        $data['title'] = 'Contact';

        return view('frontoffice.contact', $data);
    }

    public function postContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'project_type' => 'required',
            'message' => 'required'
        ]);
        $store = Contact::create($data);
        if (empty($store)) {
            return redirect()->back()->with('errors', 'Something went wrong');
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }
}
