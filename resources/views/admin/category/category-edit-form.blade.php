@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="/">Dashboard</a>
    <span class="breadcrumb-item active">Category edit-form</span>
  </nav>
      
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Category Edit Form</h5>
      {{-- <p>DataTables is a plug-in for the jQuery Javascript library.</p> --}}
    </div><!-- sl-page-title -->
    @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </div>
    @endif
    
    <div class="col-md-4">
      <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Category edit-form</h3>
            {{-- <p class="mg-b-20 mg-sm-b-30">Category create-form.</p> --}}
          </div>
          
          <form method="PUT" action="{{ route('categories.update', $categoryEditForm->id) }}" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
              <div class="form-group">
              <label for="category_name"><i>Category name</i>
                  <span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control" name="category_name" value="{{ $categoryEditForm->category_name }}"
              placeholder="...">

              </div>
          </div>
          <div class="card-body">
              <div class="form-group">
              <label for="category_name"><i>Description</i>
                  <span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control" name="description" 
              placeholder="...">

              </div>
          </div>
          <div class="row row-xs mg-t-30">
            <div class="col-sm-8 mg-l-auto">
              <div class="form-layout-footer">
                  <button type="submit" class="btn btn-warning mg-r-5">Submit</button>
                  <button type="reset" class="btn btn-secondary">Cancel</button>
              </div><!-- form-layout-footer -->
            </div><!-- col-8 -->
          </div> 
          </form>
        </div><!-- card -->
      </div><!-- col-4 -->
    </div><!-- row -->

    

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


@endsection