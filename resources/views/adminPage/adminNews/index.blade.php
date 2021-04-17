@extends('layouts.adminapp')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card" style="margin-top: 1%;">
        <div class="card-header">
              <div class="card-header d-flex bd-highlight">
                    <h3 class="p-2 flex-grow-1 bd-highlight">News</h3>
                    <div class="p-2 bd-highlight">
                        <a href="{{route('news.create')}}" class="btn btn-info" ><i class="far fa-plus-square"></i> Add New</a>
                    </div>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
               
                  <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Title</td>
                    <td>Description</td>
                    
                    <td style="width:130px;">Action</td>
                  </tr>
     
              </thead>
              <tbody>
              @foreach ($news as $i)
              <tr>
                <td>{{$i->id}}</td>
                <td style="width:350px;">
                        <img class="bd-placeholder-img " width="150px"height="150px" src="{{asset('image/newsImg/').'/'.$i->image}}">
                 </td>
                <td>{{$i->title}}</td>
                <td>{{$i->desc}}</td>
                
                <td>
                  <a href="" class="btn btn-info">
                      Edit
                  </a> 
                  <a href="" class="btn btn-danger">
                      Delete
                  </a> 
                </td>
              </tr>
              @endforeach
              </tbody>
                <tfoot>
                  <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Product Category</td>
                    <td>Brand</td>
                    <td style="width:130px;">Action</td>
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
