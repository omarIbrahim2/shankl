<div class="container">
    <div class="card-body">
        <h3 class="card-title">Add Event</h3>
        @if (session()->has("success"))
        <div id="eventMessage" class="alert alert-success">
            {{session('success')}}
           </div>
        @endif
    <form  wire:submit.prevent='AddEvent'    enctype="multipart/form-data" >

        <div class="input-item me-auto ms-0">
            @error("name")
            <div class="alert alert-danger">
                {{$message}}
            </div>

            @enderror
        <div class="form-group mb-4">
            <label for="formGroupExampleInput">Event Name</label>
            <input wire:model="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Event Name">
        </div>

        <div class="input-item me-auto ms-0">
            @error("startDate")
            <div class="alert alert-danger">
                {{$message}}
            </div>

            @enderror
        <div class="form-group mb-4">
           <label  for="startDate">Start Date</label>
           <input wire:model.lazy="startDate" class="form-control"  id="startDate">
        </div>
        {{$startDate}}

        <div class="input-item me-auto ms-0">
            @error("endDate")
            <div class="alert alert-danger">
                {{$message}}
            </div>

            @enderror

        <div class="form-group mb-4">
            <label  for="startDate">End Date</label>
            <input wire:model.lazy="endDate" class="form-control"  id="endDate">
         </div>
         {{$endDate}}

         <div class="input-item me-auto ms-0">
            @error("desc")
            <div class="alert alert-danger">
                {{$message}}
            </div>

            @enderror
         <div class="form-group mb-4">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea wire:model="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="input-item me-auto ms-0">
            @error("image")
            <div class="alert alert-danger">
                {{$message}}
            </div>

            @enderror
         <div class="custom-file mb-4">
            <input wire:model="image" type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>


        <input type="submit" value="Add"  class="btn btn-primary">
    </form>
</div>
</div>
