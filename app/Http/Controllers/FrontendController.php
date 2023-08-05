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

}
