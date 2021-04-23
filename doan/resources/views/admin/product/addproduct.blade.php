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
	<form class="content" action="{{URL::to('admin/saveproduct')}}" method="post" enctype="multipart/form-data">
		{!!csrf_field()!!}
		<?php
		if(Session::get('message')) {
			echo Session::get('message');
			Session::put('message','');
		}
		?>
		<div class="col">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Thêm sản phẩm</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
							<i class="fas fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="inputName">Tên sản phẩm</label>
						<input type="text" id="inputName" class="form-control" name="product_name">
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="exampleSelectBorder">Thương hiệu</label>
						<select name="product_brand" class="custom-select form-control-border" id="exampleSelectBorder">
							@foreach( $brand as $key => $value )
							<option value="{{ $value->brand_id}}">{{$value->brand_name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="inputName">Giới thiệu sản phẩm</label>
						<textarea name="product_content" class="text_content form-control" id="inputName"></textarea>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="exampleSelectBorder">Giá sản phẩm</label>
						<input type="text" id="inputName" class="form-control" name="product_price" placeholder="Giá">
					</div>
				</div>
				<div class="card-body">
						<label for="product_img1">Hình Ảnh 1</label>
						<input type="file" id="product_img1" name="product_img1">
						<br>
						<label for="product_img2">Hình Ảnh 2</label>
						<input type="file" id="product_img2" name="product_img2">
						<br>
						<label for="product_img3">Hình Ảnh 3</label>
						<input type="file" id="product_img3" name="product_img3">
						<br>
						<label for="product_img4">Hình Ảnh 4</label>
						<input type="file" id="product_img4" name="product_img4">
						<br>
						<label for="product_img5">Hình Ảnh 5</label>
						<input type="file" id="product_img5" name="product_img5">
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="exampleSelectBorder">Hiển thị</label>
						<select name="product_status" class="custom-select form-control-border" id="exampleSelectBorder">
							<option value="1">Hiển thị</option>
							<option value="2">Ẩn</option>
						</select>
					</div>
				</div>
			</div>
			<input type="submit" value="Thêm" class="btn btn-success float-right">
		</div>
	</form>
	<!-- /.content -->
</div>
@endsection