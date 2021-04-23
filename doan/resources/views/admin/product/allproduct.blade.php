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
                      <th>Sản phẩm</th>
                      <th>Mô tả sản phẩm</th>
                      <th>Giá</th>
                      <th>Hình ảnh</th>
                      <th>Hiển thị</th>
                      <th>Sửa</th>
                      <th>Xóa</th>
                    </tr>
                  </thead>
              @foreach ($result as $key => $value)
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>{{$value->product_name}}</td>
                      <td>{{$value->product_content}}</td>
                      <td>{{$value->product_price}}</td>
                      <td><img class="product-img" src="{{URL::to('public/images/product/'.$value->product_image1)}}" alt=""></td>
                      <td>
                        <?php
                        if($value->product_status==1){
                        ?>
                          <a href="{{URL::to('admin/unactive/'.$value->product_id)}}"><strong>Sản phẩm được hiển thị ra trang chủ</strong></a>;
                        <?php
                        }
                        else{
                          ?>
                         <a href="{{URL::to('admin/active/'.$value->product_id)}}" style="color: red"><strong>Sản phẩm bị ẩn khỏi trang chủ</strong></a>;
                       <?php
                       }
                        ?>
                      </td>
                      <td><a href="{{URL::to('admin/editproduct/'.$value->product_id)}}"><i class="nav-icon fas fa-edit"></i></a> </td>
                      <td><a href="{{URL::to('admin/deleteproduct/'.$value->product_id)}}"><i class="nav-icon fas fa-trash-alt"></i></a></td>
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