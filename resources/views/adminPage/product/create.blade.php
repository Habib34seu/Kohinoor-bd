@extends('layouts.adminapp')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12 " style="margin-top: 1%;">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Product</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <form action="{{route('product.store')}}" method ="post" enctype="multipart/form-data">
        @csrf
          <div class="card-body">
          <div class="row">
            <div class='col-8'>
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" name ="name" class="form-control">
              </div>
            </div>
            <div class='col-4'>
              <div class="form-group">
                <label for="thumb_img">Image</label>
                <input type="file" id="thumb_img" name ="img" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <section class="content">
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" id="desc" name ="desc" rows="3" placeholder="Enter ..."></textarea>
                        <!-- <input type="textarea" id="desc" name ="desc" class="form-control"> -->
                      </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- ./row -->
              </section>
            </div>
        
            <div class="col-6">
              <section class="content">
                <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="prod_spe_desc">Features</label>
                        <textarea class="form-control" rows="3" id="prod_spe_desc" name ="prod_spe_desc" placeholder="Enter ..."></textarea>
                        <!-- <input type="textarea" id="prod_spe_desc" name ="prod_spe_desc" class="form-control"> -->
                      </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- ./row -->
              </section>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <section class="content">
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="prod_eff_desc">Benefits</label>
                        <textarea class="form-control" rows="3" id="prod_eff_desc" name ="prod_eff_desc" placeholder="Enter ..."></textarea>
                        <!-- <input type="textarea" id="prod_eff_desc" name ="prod_eff_desc" class="form-control"> -->
                      </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- ./row -->
              </section>
            </div>
          </div>
          <div class="row">
              <div class='col-6'>
                  <div class="form-group">
                    <label>Product Category</label>
                    <select class="form-control select2bs4" name="pcat_id" style="width: 100%;">
                        @foreach($productCat as $b)
                          <option value="{{$b->id}}">{{ $b-> name }}</option>
                        @endforeach
                    </select>
                  </div>
              </div>
            <div class='col-6'>
                <div class="form-group">
                  <label>Brand</label>
                  <select class="form-control select2bs4" name="brand_id" style="width: 100%;">
                    @foreach($brand as $b)
                      <option value="{{$b->id}}">{{ $b-> name }}</option>
                    @endforeach
                  </select>
                </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-info">Save</button>
            <a  href="/product" class="btn btn-danger">Back</a>
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

