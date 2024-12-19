@extends('admin_layout.master')
@section('title')
posts
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Posts</h3>
              </div>
              @if(Session::has("status"))
              <br>
             <div class="alert alert-success">
               {{Session::get('status')}}
             </div>
             @endif
              <input type="hidden" {{$increment=1}}>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Num.</th>
                    <th>Picture</th>
                    <th>Post title</th>
                    <th>Post Category</th>
                    <th>Post slug</th>
                    <th>Post content</th>

                    <th>Actions</th>
                  </tr>
                  </thead>
                  @foreach($posts as $post )

                  <tbody>

                    <tr>
                      <td>{{$increment}}</td>
                      <td>
                          <img src="{{asset('Storage/post_images/'.$post->post_image)}}" style="height : 50px; width : 50px" class="img-circle elevation-2" alt="User Image">
                      </td>
                      <td>{{$post->title}}</td>
                      <td> {{$post->category_id}}</td>
                      <td>{{$post->slug}}</td>
                      <td>{{$post->content}}</td>

                      <td>
                        @if ($post->status == 1)
                        <form action="{{url('admin/unactivatepost',[$post->id])}} " method="POST" >
                          @csrf
                          @method('PUT')
                          <button class="btn btn-success" type="submit">Unactive</button>
                        </form>
                        @else
                            <form action="{{url('admin/activatepost',[$post->id])}} " method="POST" >
                              @csrf
                              @method('PUT')
                              <button class="btn btn-warning" type="submit">active</button>
                            </form>
                        @endif
                        <a href="  {{url('admin/editpost',[$post->id])}}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>     
                        <form action="{{url('admin/deletepost',[$post->id])}} " method="POST" >

                          @csrf
                          @method('DELETE')
                          <button class="btn btn-outline-danger" type="submit"><i class="nav-icon fas fa-trash"></i></button>
                        </form>
                      </td>

                    </tbody>
                    <tfoot>
                    <tr>
                    <input type="hidden" {{$increment++}}>
                  @endforeach
                    <th>Num.</th>
                    <th>Picture</th>
                    <th>Post title </th>
                    <th>Post Category</th>
                    <th>Post slug</th>
                    <th>Actions</th>
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
  </div>
@endsection
@section('style')
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('scripts')
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(document).on("click", "#delete", function(e){
  e.preventDefault();
  var link = $(this).attr("href");
  bootbox.confirm("Do you really want to delete this element ?", function(confirmed){
    if (confirmed){
        window.location.href = link;
      };
    });
  });
</script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  @endsection
