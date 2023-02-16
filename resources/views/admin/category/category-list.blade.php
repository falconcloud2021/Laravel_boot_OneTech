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
    <span class="breadcrumb-item active">Category list</span>
  </nav>
      
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Category Data Tables & Add Form</h5>
      {{-- <p>DataTables is a plug-in for the jQuery Javascript library.</p> --}}
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
        <div class="card card-info">
          <div class="card-header">
              <h3 class="card-title">Category data-table</h3>
              {{-- <i class="mg-b-20 mg-sm-b-30">Category create-form.</i>   --}}
          </div>
          <p></p>
        <div class="pd-10 pd-sm-20">
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
            <thead>
                <tr>
                <th class="wd-5p">#</th>
                <th class="wd-20p">Category name</th>
                <th class="wd-25p">Description</th>
                <th class="wd-20p">*</th>
                <th class="wd-15p">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categoriesList as $item)
                <tr>
                    <td>#</td>
                    <td>{{ $item->category_name }}</td>
                    <td>Description</td>
                    <td>*</td>
                    <td>
                    <a href="{{ route('categories.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('categories.destroy', $item->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                    </td>
                </tr> 
                @endforeach
            </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- col-md-8 -->
    </div> <!-- row -->
    <div class="col-md-4">
      <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Category create-form</h3>
            {{-- <p class="mg-b-20 mg-sm-b-30">Category create-form.</p> --}}
          </div>
          
          <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
              <div class="form-group">
              <label for="category_name"><i>Category name</i>
                  <span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control" name="category_name" placeholder="Enter New category name">

              </div>
          </div>
          <div class="card-body">
              <div class="form-group">
              <label for="category_name"><i>Description</i>
                  <span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control" name="description" placeholder="Enter category description">

              </div>
          </div>
          <div class="row row-xs mg-t-30">
            <div class="col-sm-8 mg-l-auto">
              <div class="form-layout-footer">
                  <button type="submit" class="btn btn-warning mg-r-5">Add category</button>
                  <button type="reset" class="btn btn-secondary">Cancel</button>
              </div><!-- form-layout-footer -->
            </div><!-- col-8 -->
          </div> 
          </form>
        </div><!-- card -->
      </div><!-- col-4 -->
    </div><!-- row -->

    <div class="card pd-20 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">Disabling Search &amp; Items Per Page Menu</h6>
        <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

        <div class="table-wrapper">
        <table id="datatable2" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">Category name</th>
              <th class="wd-20p">Rate</th>
              <th class="wd-10p">Sale</th>
              <th class="wd-25p">Progress</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categoriesList as $item)
            <tr>
              <td>{{ $item->category_name }}</td>
              <td>Nixon</td>
              <td>System Architect</td>
              <td>System</td>
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