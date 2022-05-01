<div class="container">
    <div class="table-responsive">
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
                    <td>{{$event->image}}</td>
                    <td>{{$event->name}}</td>
                    <td class="text-center"><button class="btn btn-danger mb-2">Delete</button>
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
