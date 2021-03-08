@extends('layouts.adminapp')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Registerd Office</h3>
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
              @foreach ($registredOffice as $rg)
              <tr>
                <td>{{$rg->id}}</td>
                <td>{{$cu->address}}</td>
                <td>{{$cu->phone}}</td>
                <td>{{$cu->fax}}</td>
                <td>{{$cu->email}}</td>
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
@endsection
