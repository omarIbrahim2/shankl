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

  <script>

    //   $("#kidElement").click(function(){

    //       livewire.on("child data" , (child)=>{
    //          console.log(child)
    //       } )
    //   })

  </script>
@endsection
