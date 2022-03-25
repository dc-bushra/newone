<?php

namespace App\Http\Controllers;

use App\PaperType;
use App\Http\Requests\GetFareRequest;
use Illuminate\Http\Request;
use App\AcademicLevel;
use App\Deadline;
use App\WebSetting;
use App\Fare;

class PagesController extends Controller
{
    public function index()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id', 'asc')->get();
        $deadlines = Deadline::all();
        $web_setting = WebSetting::first();
        // return view('pages.home', compact( 'web_setting', 'paper_types', 'academic_levels', 'deadlines'));
        return view('pages.home', compact('web_setting', 'paper_types', 'academic_levels', 'deadlines'));
    }

    public function getFare(Request $request)
    {
        return Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();
    }
}
