<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Event;
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
        
        $events = Article::latest()->first();
        // $event = Event::where('id')->first();

        return view('home', [
            'lastarticle'   => $events,
            'secondarticle' => Article::where('id', '<>', $events->id)->orderby('id', 'desc')->first(),
            'thidrarticle'  => Article::oldest()->first(),
            'events'        => Event::latest()->simplePaginate(2),

        ]);
    }
}
