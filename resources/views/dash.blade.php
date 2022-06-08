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
                <h5 class="text-dark font-weight-bold my-1 mr-5">Students</h5>
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
            <div class="col-lg-12">
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
                        <h3 class="card-title">Create New Student</h3>
                    </div>
                    <!--begin::Form-->
                    <form method="post" enctype="multipart/form-data" action="#" class="form">
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
                            <div class="form-group">
                                <label for="section">Section:</label>
                                <select name="section" class="form-control @error('section') is-invalid @enderror" id="section">
                                    {{-- @foreach($sections as $section)
                                     <option value="{{ $section->section_id }}" @if(old('section') == $section->section_id) selected @endif>{{ $section->section_name }}</option>
                                    @endforeach --}}
                                </select>
                                @error('section')
                                <div class="invalid-feedback">{{ $message  }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Full Name:</label>
                                <input name="name" type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" placeholder="Enter full name" value="{{ old('name') }}">
                                <span class="form-text text-muted">Please enter your full name</span>
                                @error('name')
                                <div class="invalid-feedback">{{ $message  }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="gender">
                                    <option value="male">M</option>
                                    <option value="female">F</option>
                                </select>
                                @error('gender')
                                <div class="invalid-feedback">{{ $message  }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>English Level:</label>
                                <input name="level" type="number" class="form-control form-control-solid @error('level') is-invalid @enderror" placeholder="Enter the students english level" value="{{ old('level') }}">
                                <span class="form-text text-muted">Please enter the student english level (1-99)</span>
                                @error('level')
                                <div class="invalid-feedback">{{ $message  }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Default Points:</label>
                                <input name="points" type="number" class="form-control form-control-solid @error('points') is-invalid @enderror" placeholder="Enter number only" value="{{ old('points') }}">
                                <span class="form-text text-muted">Please enter the student starting points (1-9999)</span>
                                @error('points')
                                <div class="invalid-feedback">{{ $message  }}</div>
                                @enderror
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