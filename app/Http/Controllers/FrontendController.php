<?php

namespace App\Http\Controllers;

use App\Models\RecentWork;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

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

}
