@extends('layouts.admin')

@section('title', 'Time ')


@section('content')
<div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Time In / Out</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Time In</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>

    </div>
</div>


<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

<div class="card card-custom example example-compact">
    <div class="card-header">
        <h3 class="card-title">Punch In</h3>

    </div>
    <form class="form">
        <div class="card-body">
         <div class="form-group row">
          <div class="col-lg-4">
           <label>Employee No.</label>
           <input type="text" class="form-control" placeholder="Enter Employee No."/>
           <span class="form-text text-muted">Please enter your Employee No.</span>
          </div>
          <div class="col-lg-4">
           <label>Employee Name:</label>
           <input type="text" class="form-control" placeholder="Enter Employee Name"/>
           <span class="form-text text-muted">Please enter your Employee Name</span>
          </div>
          <div class="col-lg-4">
           <label>Time:</label>
           <div class="input-group">
            <input type="text" class="form-control" placeholder="" value="<?php echo date('Y-m-d H:i:s') ?>"/>
           </div>
           <span class="form-text text-muted">Please enter your username</span>
          </div>
         </div>
         <div class="form-group row">
          <div class="col-lg-4">
           <label>Location:</label>
           <input type="email" class="form-control" placeholder="Enter location"/>
           <span class="form-text text-muted">Please enter your location</span>
          </div>
          <div class="col-lg-4">
           <label>Photo Capture:</label>
           <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-info-circle"></i></span></div>
            <input type="text" class="form-control" placeholder="Photo"/>
           </div>
           <span class="form-text text-muted">Please enter photo</span>
          </div>
          <div class="col-lg-4">
           <label>Remarks:</label>
           <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter your address"/>
            <div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
           </div>
           <span class="form-text text-muted">Please enter your Remarks</span>
          </div>
         </div>
        </div>
        <div class="card-footer">
         <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-8">
           <button type="reset" class="btn btn-primary mr-2">Punch In</button>
           <button type="reset" class="btn btn-secondary">Back</button>
          </div>
         </div>
        </div>
       </form>
        </div>
        </div>
        </div>
        </div>
    </div>

@endsection
