@extends('layouts.adminapp')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card" style="margin-top: 1%;">
        <div class="card-header">
              <div class="card-header d-flex bd-highlight">
                    <h3 class="p-2 flex-grow-1 bd-highlight">Annual Report</h3>
                    <div class="p-2 bd-highlight">
                        <a href="{{route('annual.create')}}" class="btn btn-info" ><i class="far fa-plus-square"></i> Add New</a>
                    </div>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
               
                  <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Thumb</td>
                    <td>PDF</td>
                    <td>Action</td>
                  </tr>
     
              </thead>
              <tbody>
              @foreach ($annual as $pc)
              <tr>
                <td>{{$pc->id}}</td>
                <td>{{$pc->name}}</td>
                <td>{{$pc->thumb_img}}</td>
                <td>{{$pc->pdf}}</td>
                <td> edit </td>
              </tr>
              @endforeach
              </tbody>
                <tfoot>
                  <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Thumb</td>
                    <td>PDF</td>
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
