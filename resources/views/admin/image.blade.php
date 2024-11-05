@extends('admin_layout.master')
@section('title')
products
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
                <h3 class="card-title">All Products</h3>
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
                    <th>Product Name</th>
                    <th>Product Category</th>
                    <th>Product Price</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  @foreach($products as $product )

                  <tbody>

                    <tr>
                      <td>{{$increment}}</td>
                      <td>
                          <img src="{{asset('Storage/product_images/'.$product->product_image)}}" style="height : 50px; width : 50px" class="img-circle elevation-2" alt="User Image">
                      </td>
                      <td>{{$product->product_name}}</td>
                      <td> {{$product->product_category}}</td>
                      <td>{{$product->product_price}}</td>
                      <td>
                        @if ($product->status == 1)
                        <form action="{{url('admin/unactivateproduct',[$product->id])}} " method="POST" >
                          @csrf
                          @method('PUT')
                          <button class="btn btn-success" type="submit">Unactive</button>
                        </form>
                        @else
                            <form action="{{url('admin/activateproduct',[$product->id])}} " method="POST" >
                              @csrf
                              @method('PUT')
                              <button class="btn btn-warning" type="submit">active</button>
                            </form>
                        @endif
                        <a href="  {{url('admin/editproduct',[$product->id])}}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>     
                        <form action="{{url('admin/deleteptoduct',[$product->id])}} " method="POST" >
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
                    <th>Product Name</th>
                    <th>Product Category</th>
                    <th>Product Price</th>
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
