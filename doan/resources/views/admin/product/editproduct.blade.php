@extends('admin.layout')
@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Cập nhật thương hiệu</h1>
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
	@foreach($result as $key => $edit)
	<form class="content" action="{{URL::to('admin/updateproduct/'.$edit->product_id)}}" method="post" enctype="multipart/form-data">
		{!!csrf_field()!!}
		<div class="col">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Cập nhật sản phẩm</h3>

					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
							<i class="fas fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="inputName">Tên sản phẩm</label>
						<input type="text" id="inputName" class="form-control" name="product_name" value="{{$edit->product_name}}">
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="exampleSelectBorder">Thương hiệu</label>
						<select name="product_brand" class="custom-select form-control-border" id="exampleSelectBorder">
							@foreach( $brand as $key => $value )
							@if( $value->brand_id == $edit->brand_id )
							<option selected value="{{$value->brand_id}}">{{$value->brand_name}}</option>
							@else
							<option value="{{$value->brand_id}}">{{$value->brand_name}}</option>
							@endif
							@endforeach
						</select>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="inputName">Giới thiệu sản phẩm</label>
						<textarea name="product_content" class="text_content form-control" id="inputName">{{$edit->product_content}}</textarea>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="exampleSelectBorder">Giá sản phẩm</label>
						<input type="text" id="inputName" class="form-control" name="product_price" placeholder="Giá" value="{{$edit->product_price}}">
					</div>
				</div>
				<div class="card-body">
					<label for="product_img1">Hình Ảnh 1</label>
					<input type="file" id="product_img1" name="product_img1" value="{{$edit->product_image1}}">
					<br/>
					<img class="product_img" src="{{URL::to('public/images/product/'.$edit->product_image1)}}">
					<br>
					<label for="product_img2">Hình Ảnh 2</label>
					<input type="file" id="product_img2" name="product_img2" value="{{$edit->product_image2}}">
					<br/>
					<img class="product_img" src="{{URL::to('public/images/product/'.$edit->product_image2)}}">
					<br>
					<label for="product_img3">Hình Ảnh 3</label>
					<input type="file" id="product_img3" name="product_img3" value="{{$edit->product_image3}}">
					<br/>
					<img class="product_img" src="{{URL::to('public/images/product/'.$edit->product_image3)}}">
					<br>
					<label for="product_img4">Hình Ảnh 4</label>
					<input type="file" id="product_img4" name="product_img4" value="{{$edit->product_image4}}">
					<br/>
					<img class="product_img" src="{{URL::to('public/images/product/'.$edit->product_image4)}}">
					<br>
					<label for="product_img5">Hình Ảnh 5</label>
					<input type="file" id="product_img5" name="product_img5" value="{{$edit->product_image5}}">
					<br/>
					<img class="product_img" src="{{URL::to('public/images/product/'.$edit->product_image5)}}">
				</div>
			</div>
			<input type="submit" value="Thêm" class="btn btn-success float-right">
		</div>
	</form>
		@endforeach
	<!-- /.content -->
</div>
@endsection