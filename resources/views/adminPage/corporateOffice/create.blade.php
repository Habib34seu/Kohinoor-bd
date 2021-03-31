@extends('layouts.adminapp')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-6 offset-md-3" style="margin-top: 5%;">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Corporate Office</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <form action="{{route('corporateOffice.store')}}" method ="post" enctype="multipart/form-data">
        @csrf
          <div class="card-body">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone">
              </div>
              <div class="form-group">
                <label>Fax</label>
                <input type="text" class="form-control" name="fax">
              </div>
              <div class="form-group">
                <label>Web</label>
                <input type="text" class="form-control" name="web">
              </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info">Save</button>
              <a  href="/corporateOffice" class="btn btn-danger">Back</a>
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
