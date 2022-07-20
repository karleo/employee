@extends('layouts.admin')

@section('title', 'Employee List')


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
                {{-- <h5 class="text-dark font-weight-bold my-1 mr-5">Employees {{ isset($section) ? " from Section: {$section->section_name}": "" }}</h5> --}}
                <!--end::Page Title-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center flex-wrap">
            <a href="{{ route('employee.create') }}" class="btn btn-fixed-height btn-bg-white btn-text-dark-50 btn-hover-text-primary btn-icon-primary font-weight-bolder font-size-sm px-5 my-1 mr-3">
                <span class="svg-icon svg-icon-md">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>Add Employee
            </a>

            {{-- @if(isset($section))
                <a target="_blank" href="{{ route('print.section', [ $section->section_id ]) }}" class="btn btn-fixed-height btn-bg-white btn-text-dark-50 btn-hover-text-primary btn-icon-primary font-weight-bolder font-size-sm px-5 my-1 mr-3">
                <span class="svg-icon svg-icon-md">
                    <i class="fa fa-print"></i>
                </span>Print All
                </a>
            @else
                <a target="_blank" href="{{ route('print.all') }}" class="btn btn-fixed-height btn-bg-white btn-text-dark-50 btn-hover-text-primary btn-icon-primary font-weight-bolder font-size-sm px-5 my-1 mr-3">
                    <span class="svg-icon svg-icon-md">
                        <i class="fa fa-print"></i>
                    </span>Print All
                </a>
            @endif --}}
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="card">
                <div id="kt_datatable" class="card-body">
                    <table id="example" class="table table-hover table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Employee No.</th>
                            <th>Full Name</th>
                            <th>Email Add</th>
                            <th>Mobile No.</th>
                            <th>QR Code</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td><img src="{{ $employee->photo }}" class="img-thumbnail max-w-50px" /></td>
                            {{-- <td></td> --}}
                            <td><a href="{{ route('employee.detail',[ $employee->emp_no ] ) }}">{{ $employee->emp_no   }}</td>
                            <td>{{ $employee->fname }} {{ $employee->mname }} {{ $employee->lname }}  </td>
                            <td>{{ $employee->email_add }}</td>
                            <td>{{ $employee->mobile_no }}</td>
                            <td><img src="{{ $employee->qr_path }}" class="img-thumbnail max-w-50px" /> </td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('employee.gQR', [ $employee->emp_no ] ) }}"><i class="fa fa-edit"></i> Generate QR</a>
                                <a class="btn btn-success btn-sm" href="{{ route('employee.show', [ $employee->emp_no ] ) }}"><i class="fa fa-eye"></i> View</a>
                                <a class="btn btn-success btn-sm" href="{{ route('employee.edit', [ $employee->emp_no ] ) }}"><i class="fa fa-edit"></i> Edit</a>
                                <a target="_blank" class="btn btn-warning btn-sm" href="{{ route('dvcard', [ $employee->emp_no ]) }}"><i class="la la-files-o"></i>Vcard</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@push('styles')
    <link href="{{ asset('assets/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <script src="{{ asset('assets/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/assets/js/pages/admin.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endpush
