@extends('layouts.admin')

@section('title', 'Create Employee')


@section('content')
 
<!--begin::Subheader-->
<div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">Employees</h5>
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
                        <h3 class="card-title">Create New Employee</h3>
                    </div>
                    <!--begin::Form-->
                    <form method="post" enctype="multipart/form-data" action="{{route('employee.store')}}" class="form">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="photo">Photo</label><br/>
                                <div class="image-input image-input-outline" id="kt_image_1">
                                    <div class="image-input-wrapper" style="background:url('{{ asset('media/users/blank.png') }}'); background-size: cover;"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="photo" accept=".png, .jpg, .jpeg"/>
                                        <input type="hidden" name="photo_remove"/>
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                                @error('photo')
                                <div class="invalid-feedback">{{ $message  }}</div>
                                @enderror
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label>Employee No.:</label>
                                        <input type="text" name="emp_no" value="{{$data}}" class="form-control" placeholder=""/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                 <div class="col-lg-4">
                                  <label>First Name:</label>
                                  <input type="text" class="form-control" name="fname"  placeholder="Enter first name"/>
                                  <span class="form-text text-muted">Please enter your first name</span>
                                 </div>
                                 <div class="col-lg-4">
                                    <label>Middle Name:</label>
                                    <input type="text" class="form-control" name="mname" placeholder="Enter middle name"/>
                                    <span class="form-text text-muted">Please enter your middle name</span>
                                 </div>
                                 <div class="col-lg-4">
                                    <label>Last Name:</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Enter last name"/>
                                    <span class="form-text text-muted">Please enter your last name</span>
                                 </div> 
                                </div>

                                <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Email:</label>
                                    <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-envelope"></i></span></div>
                                    <input type="email" class="form-control" name="email_add" placeholder="Enter email"/>
                                  </div>
                                    <span class="form-text text-muted">Please enter your email</span>
                                </div>
                                 <div class="col-lg-4">
                                  <label>Contact:</label>
                                  <input type="text" class="form-control" name="contact_no" placeholder="Enter contact number"/>
                                  <span class="form-text text-muted">Please enter your contact</span>
                                 </div>

                                 <div class="col-lg-4">
                                  <label>Mobile Number:</label>
                                  <div class="input-group">
                                   <div class="input-group-prepend"><span class="input-group-text"><i class="la la-mobile"></i></span></div>
                                   <input type="text" class="form-control" name="mobile_no" placeholder="Mobile number"/>
                                  </div>
                                  <span class="form-text text-muted">Please enter Mobile number</span>
                                 </div>                              
                                </div>

                                <div class="form-group row">
                                <div class="col-lg-4">
                                    <label>Address:</label>
                                    <div class="input-group">
                                    <input type="text" class="form-control" name="address" placeholder="Enter your address"/>
                                    <div class="input-group-append"><span class="input-group-text"><i class="la la-map-marker"></i></span></div>
                                    </div>
                                    <span class="form-text text-muted">Please enter your address</span>
                                </div>
                                 <div class="col-lg-4">
                                  <label>Website:</label>
                                  <div class="input-group">
                                   <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div>
                                   <input type="text" class="form-control" name="website" placeholder="Enter your Website"/>
                                  </div>
                                  <span class="form-text text-muted">Please enter your Website</span>
                                 </div>
                                 <div class="col-lg-4">
                                    <label>Company:</label>
                                    <div class="input-group">
                                     <div class="input-group-append"><span class="input-group-text"><i class="la la-warehouse"></i></span></div>
                                     <input type="text" class="form-control" name="company" placeholder="Enter your company"/>
                                    </div>
                                    <span class="form-text text-muted">Please enter your company</span>
                                </div>
                                <div class="col-lg-4">
                                    <label>Company Address:</label>
                                    <div class="input-group">
                                     <div class="input-group-append"><span class="input-group-text"><i class="la la-warehouse"></i></span></div>
                                     <input type="text" class="form-control" name="company_add" placeholder="Enter your company address"/>
                                    </div>
                                    <span class="form-text text-muted">Please enter your company address</span>
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



@push('scripts')
    <script>
        var avatar1 = new KTImageInput('kt_image_1');
    </script>
@endpush
