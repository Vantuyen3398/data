@extends('admin.layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thương hiệu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    	 <?php
        if(Session::get('message')) {
          echo Session::get('message');
          Session::put('message','');
        }
         ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tất cả thương hiệu</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên thương hiệu</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  @foreach($brand as $key => $brand)
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>{{$brand->brand_id}}</td>
                      <td>{{$brand->brand_name}}</td>
                      <td><a href="{{URL::to('admin/editbrand/'.$brand->brand_id)}}"><i class="nav-icon fas fa-edit"></i></a> </td>
                      <td><a href="{{URL::to('admin/deletebrand/'.$brand->brand_id)}}"><i class="nav-icon fas fa-trash-alt"></i></a></td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection