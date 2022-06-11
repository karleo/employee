@extends('layouts.admin')

@section('title', 'Create Employee')


@section('content')
  

	<!--begin::Example-->
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Basic Calendar</h3>
            </div>
            <div class="card-toolbar">
                <a href="#" class="btn btn-light-primary font-weight-bold">
                <i class="ki ki-plus icon-md mr-2"></i>Add Event</a>
            </div>
        </div>
        <div class="card-body">
            <div id="kt_calendar"></div>
        </div>
    </div>
    <!--end::Card-->
    

@endsection

 