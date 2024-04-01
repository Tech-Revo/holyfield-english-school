<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SchoolEventController extends Controller
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

        $search_keyword = request()->query('search_keyword');
        $upComingEvents = Event::when($search_keyword, function ($query) use ($search_keyword) {
            $query->where('event_name', 'like', '%' . $search_keyword . '%');
        })->orderBy('event_date', 'ASC')
            ->paginate(10);

        $reventEvents = Event::orderBy('event_date', 'ASC')
        ->whereRaw("STR_TO_DATE(event_date, '%d-%m-%Y') >= CURDATE()")
        ->limit(5)->get();

        return view('school.events', compact('data', 'upComingEvents', 'reventEvents'));
    }
}