@extends('layouts.adminapp')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-6 offset-md-3" style="margin-top: 5%;">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Finance</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <form action="{{route('finance.store')}}" method ="post" enctype="multipart/form-data">
        @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" name ="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="thumb_img">Image</label>
              <input type="file" id="thumb_img" name ="img" class="form-control">
            </div>
            <div class="form-group">
              <label for="pdf">PDF</label>
              <input type="file" id="pdf" name ="pdf" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info">Save</button>
              <a  href="/finance" class="btn btn-danger">Back</a>
            </div>
          </div>
        </form>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</section>
@endsection
