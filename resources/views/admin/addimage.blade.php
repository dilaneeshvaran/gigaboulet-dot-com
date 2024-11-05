@extends('admin_layout.master')
@section('title')
    addimage
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Image</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Image</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Add image</h3>
              </div>
              <!-- /.card-header -->
              @if(count($errors) >0)
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
                </ul>

              </div>
              @endif 
              @if(Session::has("status"))
                <br>
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
             @endif


              <!-- form start -->
              <form action="{{url('/admin/saveimage')}}" method="POST" id="quickForm" 
              enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image name</label>
                    <input type="text" name="image_name" class="form-control" id="exampleInputEmail1" placeholder="Enter image name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image description</label>
                    <input type="text" name="description1" class="form-control"  placeholder="Enter image description" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image price</label>
                    <input type="number" name="image_price" class="form-control" id="exampleInputEmail1" placeholder="Enter image price" min="1" required>
                  </div>
                  <div class="form-group">
                    <label>Image category</label>
                    <select name="image_category" class="form-control select2" style="width: 100%;" required>
                      <option selected="selected">Selectionner</option>
                      @foreach($categories as $category)
                      <option>{{$category->category_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <label for="exampleInputFile">Image image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="image_image"  class="custom-file-input" id="exampleInputFile" required>
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                  <input type="submit" class="btn btn-success" value="Save">
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection