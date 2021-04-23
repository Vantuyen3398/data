<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="{{asset('public/backend/images/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{asset('public/backend/images/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">{{Session::get('name')}}</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				{{-- order --}}
				<li class="nav-item">
					<a href="{{URL::to('admin/order')}}" class="nav-link">
						<i class="nav-icon fas fa-file-medical-alt"></i>
						<p>
							Đơn hàng
						</p>
					</a>
				</li>
				{{-- product --}}
				<li class="nav-item">
					<a href="" class="nav-link">
						<i class="nav-icon fas fa-mobile-alt"></i>
						<p>
							Sản phẩm
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{URL::to('admin/allproducts')}}" class="nav-link">
								<i class=" nav-icon far fa-circle"></i>
								<p>Tất cả sản phẩm</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('admin/addproduct')}}" class="nav-link">
								<i class=" nav-icon far fa-circle"></i>
								<p>Thêm sản phẩm</p>
							</a>
						</li>
					</ul>
				</li>
				{{-- brand --}}
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tree"></i>
						<p>
							Thương hiệu
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{URL::to('admin/allbrand')}}" class="nav-link">
								<i class=" nav-icon far fa-circle"></i>
								<p>Tất cả thương hiệu</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{URL::to('admin/addbrand')}}" class="nav-link">
								<i class=" nav-icon far fa-circle"></i>
								<p>Thêm thương hiệu</p>
							</a>
						</li>
					</ul>
				</li>
				{{-- product type --}}
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-headphones"></i>
						<p>
							Loại sản phẩm
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/UI/general.html" class="nav-link">
								<i class=" nav-icon far fa-circle"></i>
								<p>Tất cả loại sản phẩm</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/general.html" class="nav-link">
								<i class=" nav-icon far fa-circle"></i>
								<p>Thêm loại sản phẩm</p>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>