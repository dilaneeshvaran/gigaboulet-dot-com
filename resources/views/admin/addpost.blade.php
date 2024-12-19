@extends('admin_layout.master')
@section('title')
    addpost
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
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add post</h3>
              </div>
              <!-- /.card-header -->
              @if(count($errors) > 0)
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
              <form action="{{url('/admin/savepost')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Post meta title </label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter post meta title" required>
                  </div>
                  <div class="form-group">
                    <label for="excerpt">Post excerpt</label>
                    <input type="text" name="excerpt" class="form-control" id="title" placeholder="Enter post excerpt" required>
                  </div>
                  <div class="form-group">
                    <label for="slug">Post slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter post slug" required readonly>
                  </div>
                  <div class="form-group">
                    <label>Post category</label>
                    <select name="category_id" class="form-control select2" style="width: 100%;" required>
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="content">Post content</label>
                    <textarea type="text" rows="10" name="content" class="form-control" id="content" placeholder="Enter post description" >
                    </textarea>
                  </div>
                  <label for="exampleInputFile">Post image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="post_image" class="custom-file-input" id="exampleInputFile" required >
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-warning" value="Save" >
                </div>
              </form>
            </div>
            <!-- /.card --> 
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@section('scripts')
<script>
// Fonction pour générer un slug à partir du titre
document.getElementById('title').addEventListener('input', function() {
    let title = this.value; // Récupérer la valeur du titre
    let slug = title.toLowerCase()
                    .replace(/[^\w\s-]/g, '')  // Supprimer les caractères non alphanumériques
                    .replace(/\s+/g, '-')      // Remplacer les espaces par des tirets
                    .replace(/-+/g, '-');      // Remplacer plusieurs tirets par un seul
    document.getElementById('slug').value = slug; // Mettre à jour le champ slug
});
</script>
@endsection

@endsection
