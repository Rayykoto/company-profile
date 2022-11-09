@extends('layouts.admin.app', ['title' => 'Events'])

@section('header')
    <h1>Events</h1>
@endsection

@section('content')

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="left">Events</h4>
                    <hr>
                    <a href="{{ route('admin.events.create') }}" class="btn btn-md btn-success mb-3 text-center">ADD EVENTS</a>
                  </div>
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Location</th>
                            <th>Description</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>User</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>     
                            @forelse ($events as $index => $event )                            
                          <tr>
                            <td class="text-center">{{ ($events->currentPage() -1) * $events->perPage() + $loop->iteration }}</td>
                            <td>{{ $event->name }}</td>
                            <td>
                                <img src="{{ $event->image  }}" class="rounded" style="width: 150px">
                            </td>
                            <td>{{ $event->location }}
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->start_date }}
                            <td>{{ $event->end_date }}
                            <td>{{ $event->user_id }}
                            <td>
                                <form>
                                    <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                          </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Events Belum Tersedia
                            </div>
                            @endforelse
                        </tbody>
                      </table>
                        {{ $events->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

</div>
@endsection

