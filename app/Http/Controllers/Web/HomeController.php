<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $now = Carbon::today()->toDateString();

        // dd($now);
        $article        = Article::latest()->first();
        $events         = Event::latest()->whereDate('end_date', '>=', $now)->simplePaginate(3);
        $past_events    = Event::latest()->whereDate('end_date', '<', $now)->simplePaginate(3);

        // if ($request->ajax()) {
        //     return view('components.upcoming_event', ['events' => $events])->render();
        // }

        return view('home', [
            'lastarticle'   => $article,
            'secondarticle' => Article::where('id', '<>', $article->id)->orderby('id', 'desc')->first(),
            'thidrarticle'  => Article::oldest()->first(),
            'events'        => $events,
            'past_events'   => $past_events,
        ]);
    }

    function past_event(Request $request)
    {
        $now = Carbon::today()->toDateString();
        $past_events    = Event::latest()->whereDate('end_date', '<', $now)->simplePaginate(3);
        // dd(compact('past_events'));
        if ($request->ajax()) {
            return view('components.past_event', compact('past_events'))->render();
        }
    }
    function upcoming_event(Request $request)
    {
        $now = Carbon::today()->toDateString();
        $events         = Event::latest()->whereDate('end_date', '>=', $now)->simplePaginate(3);
        // dd(compact('events'));
        if ($request->ajax()) {
            return view('components.upcoming_event', compact('events'))->render();
        }
    }
}
