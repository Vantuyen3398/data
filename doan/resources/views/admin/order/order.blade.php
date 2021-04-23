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
                <h3 class="card-title">Tất cả đơn hàng</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Tên người đặt</th>
                      <th>Tổng tiền</th>
                      <th>Tình trạng</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  @foreach($all_order as $all_order)
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td>{{$all_order->user_name}}</td>
                      <td>{{$all_order->order_total}}</td>
                      <td><?php
                      if($all_order->order_status == 2){
                        echo 'Đã xử lý đơn hàng';
                      }else{
                        echo 'Đơn hàng đang chờ xử lý';
                      }
                      ?></td>
                      <td><a href="{{URL::to('admin/order/update/'.$all_order->order_id)}}"><i class="nav-icon fas fa-edit"></i></a> </td>
                      <td><a href="{{URL::to('admin/order/delete/'.$all_order->order_id)}}"><i class="nav-icon fas fa-trash-alt"></i></a></td>
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