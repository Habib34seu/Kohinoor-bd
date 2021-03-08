@extends('layouts.adminapp')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
               
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
     
              </thead>
              <tbody>
              @foreach ($caurosel as $cu)
              <tr>
                <td>{{$cu->id}}</td>
                <td>{{$cu->image}}</td>
                <td>{{$cu->status}}</td>
                <td> edit </td>
              </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Active Status</th>
                <th>Action</th>
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
@endsection
