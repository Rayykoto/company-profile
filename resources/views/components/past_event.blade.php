<div class="row">
    <div class="col-md-6">
        <h4 class="hidden">Past Events</h4>
    </div>
    <div class="col-md-6">    
        <label class="hidden pagination justify-content-end">{{ $past_events->links(); }}</label>
    </div>
</div>

<label class="show pagination justify-content-end">{{ $past_events->links(); }}</label>

@foreach ($past_events as $past_event)
<div class="card mb-3" style="max-width: 500px; background-color: #edf2f2">
    <div class="row g-0">
        <div class="tanggal col-md-4 text-center pt-3">
            <h4 class="text-light">
                {{ (Carbon\Carbon::parse($past_event->start_date)->formatLocalized('%d')) }}</h4>
            <h4 class="text-light">
                {{ (Carbon\Carbon::parse($past_event->start_date)->formatLocalized('%b')),2,4 }}</h4>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <a href="#articles" data-toggle="modal" data-target="#DataEvent" event_name="{{ $past_event->name }}"
                    event_image="{{ $past_event->image }}"
                    event_start="{{ Carbon\Carbon::parse($past_event->start_date)->format('d M Y') }}"
                    event_description="{{ $past_event->description }}">
                    <h5 class="card-title">{{ $past_event->name }}</h5>
                </a>
                <h6 class="card-text">Date : {{ Carbon\Carbon::parse($past_event->start_date)->format('d M Y') .' - '. Carbon\Carbon::parse($past_event->end_date)->format('d M Y') }} </h6>
                <h6 class="card-text">Time : 08.00 - Selesai</h6>
                <h6 class="card-text">Venue : {{ $past_event->location }}</h6>
            </div>
        </div>
    </div>
</div>
@endforeach
