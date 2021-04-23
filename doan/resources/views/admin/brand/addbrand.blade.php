@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm thương Hiệu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{URL::to('admin/savebrand')}}" method="post">
        <?php
        if(Session::get('message')) {
          echo Session::get('message');
          Session::put('message','');
        }
         ?>
        <div class="col">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thương hiệu</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Project Name</label>
                {!!csrf_field()!!}
                <input type="text" id="inputName" class="form-control" name="addbrand">
              </div>
            </div>
            
          </div>
           <input type="submit" value="Thêm" class="btn btn-success float-right">
        </div>
    </form>
    <!-- /.content -->
  </div>
  @endsection