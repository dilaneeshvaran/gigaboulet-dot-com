@extends('admin_layout.master')
@section('title')
    Edit post
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
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
                <h3 class="card-title">Edit post</h3>
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
              <form action="{{url('admin/updatepost', [$post->id])}}" method="POST" id="quickForm" 
              enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post title  la
                    </label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="excerpt">Post excerpt</label>
                    <input type="text" name="excerpt" class="form-control" id="title" value="Enter post excerpt" >
                  </div>

                  <div class="form-group">
                    <label>Post category</label>
                    <select name="category_id" value="{{$post->category_id}} "  class="form-control select2" style="width: 100%;" >
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="content">Post content</label>
                    <textarea type="text" name="content" class="form-control" id="content" value="{{$post->content}} " >
                    </textarea>
                  </div>
                  <label for="exampleInputFile">Post image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="post_image"  class="custom-file-input" id="exampleInputFile" >
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