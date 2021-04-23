@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi tiết đơn hàng</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Simple Tables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>

  <!-- Main content -->
  <div class="content">
    <?php
    if(Session::get('message')) {
      echo Session::get('message');
      Session::put('message','');
    }
    ?>
    @foreach ($all as $all)
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Thông tin người mua</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Tên người đặt</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Tình trạng</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{$all->user_name}}</td>
                    <td>{{$all->user_phone}}</td>
                    <td>{{$all->user_email}}</td>
                    <td>{{$all->address}}</td>
                    <td><?php
                    if($all->order_status == 2){
                      echo 'Đã xử lý đơn hàng';
                    }else{
                      echo 'Đơn hàng đang chờ xử lý';
                    }
                    ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-header">
              <h3 class="card-title">Đơn hàng</h3>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Đơn giá</th>
                  </tr>
                </thead>
                @foreach($detail as $detail)
                <tbody>
                  <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{$detail->product_name}}</td>
                    <td>{{$detail->product_sales_quantity}}</td>
                    <td>{{$detail->product_price}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <h5 style="text-align: right;">Tổng Tiền: {{$all->order_total}}</h5>
        </div>
      </div>
      <form class="content" action="{{URL::to('admin/updateorder/'.$all->order_id)}}" method="post">
        <?php
        if(Session::get('message')) {
          echo Session::get('message');
          Session::put('message','');
        }
        ?>
        <div class="col">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"> Cập nhật đơn hàng</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                {!!csrf_field()!!}
                <select name="order_status" class="custom-select form-control-border" id="exampleSelectBorder">
                  <option value="1">Đang chờ xử lý</option>
                  <option value="2" selected>Đã xử lý xong</option>
                </select>
              </div>
            </div>
            
          </div>
          <input type="submit" value="Cập nhật" class="btn btn-success float-right">
        </div>
      </form>
    </div><!-- /.container-fluid -->
    @endforeach
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection