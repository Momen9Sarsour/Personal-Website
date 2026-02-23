<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    function index()
    {
        return view('front.index');
    }

    function resume()
    {
        $experiences = Experience::latest()->get();
        $educations = Education::latest()->get();
        $skills = Skill::latest()->get();
        $languages = Language::latest()->get();

        return view('front.resume', compact('experiences', 'educations', 'skills', 'languages'));
    }

    function projects()
    {
        $projects = Project::latest()->get();
        return view('front.projects', compact('projects'));
    }
    function contact()
    {
        return view('front.contact');
    }

    function contact_mail(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required'
        ]);

        // save messages in Database
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);


        flash()->success('Your message was sent successfully!');

        return redirect()->back();
    }
}
