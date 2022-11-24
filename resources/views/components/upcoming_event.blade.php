<div class="row">
    <div class="col-md-8">
        <h4>Upcoming Events</h4>
    </div>
    <div class="col-md-4">
        <label class="pagination justify-content-end">{{ $events->fragment('event')->links(); }}</label>
    </div>
</div>


<?php $num = 60?>
@foreach ($events as $event)
<div class="card mb-3" style="max-width: 500px; background-color: #edf2f2">
    <div class="row g-0">
        <div class="tanggal col-md-4 text-center pt-3">
            <h4 class="text-light">
                {{ (Carbon\Carbon::parse($event->start_date)->formatLocalized('%d')) }}</h4>
            <h4 class="text-light">
                {{ (Carbon\Carbon::parse($event->start_date)->formatLocalized('%b')),2,4 }}</h4>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <a href="#articles" data-toggle="modal" data-target="#DataEvent" event_name="{{ $event->name }}"
                    event_image="{{ $event->image }}"
                    event_start="{{ (Carbon\Carbon::parse($event->start_date)->format('d M Y')) }}"
                    event_description="{{ $event->description }}">
                    <h5 class="card-title">{{ $event->name }}</h5>
                </a>
                <h6 class="card-text">Date : {{ Carbon\Carbon::parse($event->start_date)->format('d M Y') .' - '. Carbon\Carbon::parse($event->end_date)->format('d M Y') }} </h6>
                <h6 class="card-text">Time : 18.00 - Selesai</h6>
                <h6 class="card-text">Venue : {{ $event->location }}</h6>
            </div>
        </div>
    </div>
</div>
@endforeach
