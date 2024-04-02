<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Localization;
use App\Models\SiteSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AdminEventController extends Controller
{
    public function index($settingable_type = null, $settingable_id = null)
    {
        $site_setting = SiteSetting::where("settingable_type", $settingable_type)
            ->where("settingable_id", $settingable_id)
            ->get();
        $data = [];
        foreach ($site_setting as $item) {
            if ($item->type == 'image') {
                $data[$item->key] = $item->getFirstMediaUrl();
            } else {
                $data[$item->key] = $item->value;
            }
        }

        $lang = Localization::where('user_id', auth()->user()->id)->first();

        return view('admin.events.events', compact('lang', 'data'));
    }

    public function viewEventIndex($settingable_type = null, $settingable_id = null)
    {
        $site_setting = SiteSetting::where("settingable_type", $settingable_type)
            ->where("settingable_id", $settingable_id)
            ->get();
        $data = [];
        foreach ($site_setting as $item) {
            if ($item->type == 'image') {
                $data[$item->key] = $item->getFirstMediaUrl();
            } else {
                $data[$item->key] = $item->value;
            }
        }

        $lang = Localization::where('user_id', auth()->user()->id)->first();

        return view('admin.events.view_events', compact('lang', 'data'));
    }

    public function eventData()
    {
        $events = Event::all();


        $formattedEvents = [];
        foreach ($events as $event) {
            $formattedEvents[] = [
                'title' => $event->event_name,
                'start' => Carbon::parse($event->event_date)->format('Y-m-d H:i:s'),
                'end' => Carbon::parse($event->event_date)->format('Y-m-d H:i:s'),
                'className' => 'bg-primary',
            ];
        }


        return response()->json($formattedEvents);
    }

    public function allEventData()
    {
        $events = Event::latest()->get();
        return response()->json(['data' => $events]);
    }

    public function addEventIndex()
    {
        $lang = Localization::where('user_id', auth()->user()->id)->first();

        return view('admin.events.add_event', compact('lang'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'event_name' => ['required', 'string'],
            'event_date' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
            'event_address' => ['required']

        ]);


        try {

            $event = DB::transaction(function () use ($request) {
                $event = Event::create([
                    'published_by' => auth()->user()->name,
                    'event_name' => $request->event_name,
                    'event_date' => $request->event_date,
                    'start_time' => $request->start_time,
                    'end_time' => $request->end_time,
                    'address' => $request->event_address,


                ]);
                return $event;
            });
            if ($event) {
                return back()->with('success', 'Event created successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}