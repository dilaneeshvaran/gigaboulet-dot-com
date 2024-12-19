@extends('admin_layout.master')
@section('title')
    cathegory
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add category</small></h3>
              </div>
              @if(Session::has("status"))
               <br>
              <div class="alert alert-success">
                {{Session::get('status')}}
              </div>
              @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/savecategory')}} "method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter category" required>
                  </div>
                  <div class="form-group">
                    <label for="slug">Category slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Category slug" required readonly>
                  </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                  <input type="submit" class="btn btn-primary" value="Save" >
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
  @section('scripts')
<script>
// Fonction pour générer un slug à partir du titre
document.getElementById('name').addEventListener('input', function() {
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