@extends('admin.admin_layouts')

@section('admin_content')

@push('data-table-styles')
    <link href="{{ asset('public/dashboard/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('public/dashboard/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('public/dashboard/lib/select2/css/select2.min.css') }}" rel="stylesheet">
@endpush

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Data Table</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Data Table</h5>
          <p>DataTables is a plug-in for the jQuery Javascript library.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Responsive DataTable</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Subcategory name</th>
                  <th class="wd-15p">Last name</th>
                  <th class="wd-20p">Position</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($brandsList as $item)
                   <tr>
                    <td>{{ $item->brand_name }}</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                  </tr> 
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

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