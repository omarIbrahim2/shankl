@extends("layouts.main")

@section("title")
  parent profile
@endsection

 @section("styles")
   @livewireStyles
 @endsection
@section("section")


  @livewire("parent-profile")



@endsection


@section("scripts")
  @livewireScripts
 {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
  <script>

window.addEventListener('updateChild' , function(e){
    swal.fire({
            text: "child updated successfully",
             position: "center",
             timer: 3000,
             color:'green',
             reverseButtons: false,

        })
    })

    window.addEventListener('deleteChild' , function(e){
    swal.fire({
            text: "child deleted successfully",
             position: "center",
             timer: 3000,
             color:'red',
             reverseButtons: false,

        })
    })

    window.addEventListener('childDelete' , function(e){
    swal.fire({
            title: 'deleting child',
            text: "are you sure you want to delete it ?",
           icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
             reverseButtons: true,
        }).then((result)=>{
            if (result.isConfirmed) {

              window.livewire.emit("deleteConfirmed")
            }
        })

    })




  </script>
@endsection
