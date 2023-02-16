@extends('admin.admin_layouts')

@section('admin_content')

@push('data-table-styles')
    <link href="{{ asset('public/dashboard/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('public/dashboard/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('public/dashboard/lib/select2/css/select2.min.css') }}" rel="stylesheet">
@endpush

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">Dashboard</a>
        <span class="breadcrumb-item active">Subcategory list</span>
      </nav>
      
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Subcategory Data Tables & Add Form</h5>
          <p>DataTables is a plug-in for the jQuery Javascript library.</p>
        </div><!-- sl-page-title -->
        @if ($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </div>
        @endif
        <div class="row">
          <div class="col-md-8">
          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Subcategory List</h6>
            <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-5p">#</th>
                    <th class="wd-20p">Subcategory name</th>
                    <th class="wd-25p">Description</th>
                    <th class="wd-20p">Main Category</th>
                    <th class="wd-15p">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subcategoryList as $item)
                    <tr>
                      <td>#</td>
                      <td>{{ $item->subcategory_name }}</td>
                      <td>Description</td>
                      <td>Main category</td>
                      <td>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        {{-- <a href="{{ route('subcategories.destroy') }}" class="btn btn-sm btn-danger" id="delete">Delete</a> --}}
                      </td>
                    </tr> 
                  @endforeach
                </tbody>
              </table>
            </div><!-- table-wrapper -->
          </div><!-- card -->
        </div>
        <div class="col-md-4">
          <div class="card card-secondary">
              <div class="card-header">
                  <h3 class="card-title">Subcategory create-form</h3>
                  <p class="mg-b-20 mg-sm-b-30">Subcategory create-form.</p>
              </div>
              
              <form method="POST" action="{{ route('subcategories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="subcategory_name"><i>Subcategory name</i>
                      <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="subcategory_name" placeholder="Enter subcategory name">

                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="subcategory_name"><i>Description</i>
                      <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="description" placeholder="Enter subcategory name">

                  </div>
                </div>
                <div class="row row-xs mg-t-30">
                  <div class="col-sm-8 mg-l-auto">
                    <div class="form-layout-footer">
                      <button class="btn btn-warning mg-r-5">Add subcategory</button>
                      <button class="btn btn-secondary">Cancel</button>
                    </div><!-- form-layout-footer -->
                  </div><!-- col-8 -->
                </div> 
              </form>
          </div><!-- card -->
        </div>
        </div>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Disabling Search &amp; Items Per Page Menu</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable2" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">First name</th>
                  <th class="wd-20p">Position</th>
                  <th class="wd-10p">Salary</th>
                  <th class="wd-25p">E-mail</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($subcategoryList as $item)
                   <tr>
                    <td>{{ $item->subcategory_name }}</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                  </tr> 
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      </div><!-- sl-pagebody -->
      {{-- <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2023. Starlight. All Rights Reserved.</div>
          <div>Made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer> --}}
    </div><!-- sl-mainpanel -->

    @push('data-table')
    <script src="{{ asset('public/dashboard/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('public/dashboard/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('public/dashboard/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('public/dashboard/lib/select2/js/select2.min.js') }}"></script>

    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
    @endpush

@endsection