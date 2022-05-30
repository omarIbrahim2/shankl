
<div class="container">


    <div class="row justify-content-between mt-2 mb-3">
        <div class="col-md-3">
            <input type="text" placeholder="search" class="form-control">
        </div>

        <div class="col-md-5">
            <a href="{{route('addEvent')}}" class="btn btn-success">Add Event</a>
        </div>

    </div>
    <div class="table-responsive">
        @if (session()->has("message"))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif

        <table class="table table-bordered mb-4">
            <thead>
                <tr>
                    <th>image</th>
                    <th>name</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event )


                <tr>
                    <td><img style="width: 40px" src="{{asset("$event->image")}}" alt=""></td>
                    <td>{{$event->name}}</td>
                    <td class="text-center">
                        <button wire:click="eventDeleting({{$event->id}})"  class="btn btn-danger mb-2">Delete</button>
                        <a href="{{url("/dashboard/show/edit/$event->id")}}" class="btn btn-primary" >Edit</a>
                    </td>


                </tr>

                @endforeach

            </tbody>
        </table>

        @if(!empty($events))
    {{ $events->links("Pagination-links") }}

        @endif


           </div>
</div>






