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
        $events = Article::latest()->first();
        // $event = Event::where('id')->first();

        return view('home', [
            'lastarticle'   => $events,
            'secondarticle' => Article::where('id', '<>', $events->id)->orderby('id', 'desc')->first(),
            'thidrarticle'  => Article::oldest()->first(),
            'events'        => Event::latest()->whereDate('end_date', '>=', $now)->simplePaginate(3),
            'past_events'   => Event::latest()->whereDate('end_date', '<', $now)->simplePaginate(3),
        ]);
    }
}
