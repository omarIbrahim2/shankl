@extends('layouts.admin')
@section('styles')
<link href="{{asset("admin")}}/css/scrollspyNav.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset("admin")}}/css/forms/theme-checkbox-radio.css">
<link href="{{asset("admin")}}/css/tables/table-basic.css" rel="stylesheet" type="text/css">
<link href="{{asset("admin")}}/css/elements/custom-pagination.css" rel="stylesheet" type="text/css">
@endsection
@livewireStyles
@section("content")
@livewire('events')

@endsection

@livewireScripts




<script>

    window.addEventListener("openDeleteModal" , event=>{
        $("#deleteModal").modal("show");
    })
</script>
