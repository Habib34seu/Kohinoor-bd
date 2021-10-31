@extends('layouts.adminapp')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-6 offset-md-3" style="margin-top: 5%;">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Image Gallery</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <form action="{{route('imgGadmin.store')}}" method ="post" enctype="multipart/form-data">
        @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" id="image" name ="image" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info">Save</button>
              <a  href="/imgGadmin" class="btn btn-danger">Back</a>
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
