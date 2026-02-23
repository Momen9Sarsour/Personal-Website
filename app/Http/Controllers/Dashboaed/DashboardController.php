<?php

namespace App\Http\Controllers\Dashboaed;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard');
    }

    function messages()
    {
        $messages = Message::latest()->paginate(10);
        return view('dashboard.messages.index', compact('messages'));
    }

    function messages_show(Message $message)
    {
        return view('dashboard.messages.show', compact('message'));
    }

    function settings()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        // dd($settings);
        return view('dashboard.settings', compact('settings'));
    }

    function settings_save(Request $request)
    {
        $settings = $request->except('_token', '_method');
        // dd($settings);
        foreach ($settings as $key => $value) {
            Setting::updateOrCreate([
                'key' => $key,
            ], [
                'value' => $value,
            ]);
        }

        flash()->success('Setting created successfully!');

        return redirect()->back();
    }
}
