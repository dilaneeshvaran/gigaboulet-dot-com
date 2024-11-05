@extends('admin_layout.master')
@section('title')
    galerie
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Galeries</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Galeries</li>
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
                <h3 class="card-title">All Galeries</h3>
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
                    <th>Picture name</th>
                    <th>Description </th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($galeries as $galerie )
                      <tr>
                        <td>{{$increment}}</td>
                        <td>
                          <img src="{{asset('storage/galerie_images/'.$galerie->galerie_image)}}" style="height : 50px; width : 50px"
                          class="img-circle elevation-2" alt={{$galerie->galerie_image}}>
                        </td>
                        <td>{{$galerie->galerie_name}}</td>
                        <td>{{$galerie->galerie_description}}</td>
                        <td>
                          @if ($galerie->status == 1)
                              <form action="{{url('admin/unactivategalerie',[$galerie->id])}} " method="POST" >
                                @csrf
                                @method('PUT')
                                <button class="btn btn-success" type="submit">Unactive</button>
                              </form>
                            @else
                                <form action="{{url('admin/activategalerie',[$galerie->id])}} " method="POST" >
                                  @csrf
                                  @method('PUT')
                                  <button class="btn btn-warning" type="submit">active</button>
                                </form>
                          @endif
                          <a href="  {{url('admin/editgalerie',[$galerie->id])}}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                          <form action="{{url('admin/deletegalerie',[$galerie->id])}} " method="POST" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" type="submit"><i class="nav-icon fas fa-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                      <input type="hidden" {{$increment++}}>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Num.</th>
                    <th>Picture</th>
                    <th>Description one</th>
                    <th>Description Two</th>
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