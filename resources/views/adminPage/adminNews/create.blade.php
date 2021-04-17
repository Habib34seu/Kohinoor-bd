@extends('layouts.adminapp')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-8 offset-md-2" style="margin-top: 5%;">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">News</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <form action="{{route('news.store')}}" method ="post" enctype="multipart/form-data">
        @csrf
          <div class="card-body">
            <div class="row">
              <div class='col-8'>
                <div class="form-group">
                  <label for="inputName">Title</label>
                  <input type="text" id="inputName" name ="title" class="form-control">
                </div>
              </div>
              <div class='col-4'>
                <div class="form-group">
                  <label for="thumb_img">Image</label>
                  <input type="file" id="thumb_img" name ="image" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="desc">News Description</label>
                  <textarea id="desc"  name ="desc"  class="form-control" rows="4"></textarea>
                </div>
              </div>
            <div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-info">Save</button>
              <a  href="/news" class="btn btn-danger">Back</a>
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
