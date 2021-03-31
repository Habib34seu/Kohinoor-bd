@extends('layouts.adminapp')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
      <div class="card" style="margin-top: 1%;">
            <div class="card-header">
                <div class="card-header d-flex bd-highlight">
                      <h3 class="p-2 flex-grow-1 bd-highlight">Registerd Office</h3>
                      <div class="p-2 bd-highlight">
                      <a href="{{route('registerdOffice.create')}}" class="btn btn-info" ><i class="far fa-plus-square"></i> Add New</a>
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
                    <td>Web</td>
                    <td>Action</td>
                  </tr>
     
              </thead>
              <tbody>
              @foreach ($registredOffice as $rg)
              <tr>
                <td>{{$rg->id}}</td>
                <td>{{$rg->address}}</td>
                <td>{{$rg->phone}}</td>
                <td>{{$rg->fax}}</td>
                <td>{{$rg->email}}</td>
                <td>{{$rg->web}}</td>
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
                    <td>Web</td>
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
