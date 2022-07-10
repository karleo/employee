@extends('layouts.admin')

@section('title', 'Create Role')

@section('content')


<!--begin::Subheader-->
<div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">Roles</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
    </div>
</div>
<!--end::Subheader-->

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h4>Errors found when submitting form.</h4>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Create New Role</h3>
                    </div>
                    <!--begin::Form-->
                    <form method="post" enctype="multipart/form-data" action="{{route('employee.store')}}" class="form">
                        @csrf
                        <div class="card-body">                            
                            <div class="card-body">                               
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label>Role Name</label>
                                        <input type="text" class="form-control" name="name"  placeholder="Role name"/>
                                        <span class="form-text text-muted">Please enter your role name</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Code Name:</label>
                                        <input type="text" class="form-control" name="guard_name" placeholder="Code name"/>
                                        <span class="form-text text-muted">Please enter your code name</span>
                                    </div>
                                </div>
                            </div> 
                        </div>  
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
</div> 


@endsection 