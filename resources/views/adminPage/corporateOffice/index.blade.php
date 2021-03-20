@extends('layouts.adminapp')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card" style="margin-top: 1%;">
        <div class="card-header">
              <div class="card-header d-flex bd-highlight">
                    <h3 class="p-2 flex-grow-1 bd-highlight">Corporate Office</h3>
                    <div class="p-2 bd-highlight">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-create">
                            <i class="far fa-plus-square"></i> Add New
                        </button>
                    </div>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
               
                  <tr>
                    <td>ID</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>Fax</td>
                    <td>Email</td>
                    <td>Action</td>
                  </tr>
     
              </thead>
              <tbody>
              @foreach ($corporate as $cr)
              <tr>
                <td>{{$cr->id}}</td>
                <td>{{$cr->address}}</td>
                <td>{{$cr->phone}}</td>
                <td>{{$cr->fax}}</td>
                <td>{{$cr->email}}</td>
                <td> edit </td>
              </tr>
              @endforeach
              </tbody>
                <tfoot>
                  <tr>
                    <td>ID</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>Fax</td>
                    <td>Email</td>
                    <td>Action</td>
                  </tr>
                </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

<div class="modal fade" id="modal-create">
  <div class="modal-dialog modal-lg">
    <form id="corporateForm">
    @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New Image</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
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
          </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection
