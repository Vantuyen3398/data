<!DOCTYPE html>
<?php 
  ob_start();
  session_start();
  include("ket_noi.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="container"> 
			<div class="clearfix"></div>
        <div class="headercuatoi" style = "margin-bottom:3px; margin-top:1px">
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
           <!-- Brand -->
            <a class="navbar-brand" href="#">PNV Shop</a>
   
           <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
           <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <?php
                include('chuc_nang/menu_ngang.php');
              ?>
            </div>
    <!-- menu phai -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link">Tom</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Logout</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="content col-md-9 col-sm-9 col-xs-12">  
				<div class="banner">
				   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 100%;">
					  <div class="carousel-inner">
						 <div class="carousel-item active">
							<img class="d-block w-100" style="width: 100%; height:250px" src="images/sidebar1.jpg" alt="First slide">
						 </div>
						 <div class="carousel-item">
							<img class="d-block w-100" style="width: 100%; height:250px" src="images/sidebar2.jpg" alt="Second slide">
						 </div>
						 <div class="carousel-item">
							<img class="d-block w-100" style="width: 100%; height:250px" src="images/slider.jpg" alt="Third slide">
						 </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						 <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						  <span class="carousel-control-next-icon" aria-hidden="true"></span>
						 <span class="sr-only">Next</span>
					  </a>
				   </div>
           <div class="box-index">
             <h2>Th???c h??nh PHP ??? ????y</h2>
             <?php
                include("DieuHuongMenu.php");
             ?>
           </div>
				</div>
			

            <div class="box-index">
              <h2>Thi???t k??? web</h2>
              <div class="row">
                <div class="item col-md-4 col-sm-4 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item1.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-4 col-sm-4 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item2.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-4 col-sm-4 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item1.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                
                <div class="item col-md-4 col-sm-4 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item1.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-4 col-sm-4 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item2.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-4 col-sm-4 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item1.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                
              </div>
            </div>
            <div class="box-index">
              <h2>Marketing Online</h2>
              <div class="row">
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item1.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item2.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item1.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item2.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item1.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item2.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item1.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <span><a href="#" class="thumbnail"><img src="images/item2.jpg"></a></span>
                  <h3><a href="#">Ti??u ????? b??i vi???t</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="sidebar col-md-3 col-sm-3 col-xs-12">
             <!-- Navbar-nav with FORM -->
			 <div class="sidebar-item mt-1 mb-1">
		<form class="form-inline" action="/somepage">
			<input class="form-control col-md-7 col-sm-7 col-xs-12" type="text" placeholder="Search">
			 <button class="btn btn-success ml-auto" type="submit">Search</button>
		</form>
					
				</div>
			
			<div class="sidebar-item mt-1 mb-1">
          <h4 class="widget-title">Danh M???c B??i T???p</h4>
          <?php
          include ('chuc_nang/menu_doc.php');
          ?>
      </div>
            </div>
          </div>
				
			<div class="content col-md-9 col-sm-9 col-xs-12">  
				<div class="btn-group text-center" style="margin-left:auto; margin-right:auto; display:block; ">
				<div class="btn btn-dark">Trang truoc</div>
					<div class="btn btn-dark">1</div>
					<div class="btn btn-dark">2</div>
					<div class="btn btn-dark">3</div>
						<div class="btn btn-dark">....</div>
					<div class="btn btn-dark">Trang sau</div>
				</div>	
		  
			</div>
		  
        </div>
        <div class="content col-md-9 col-sm-9 col-xs-12"> 
          <h3> hien thi toan bo san pham trang chu </h3>
          <?php
            include("chuc_nang/san_pham/san_pham_trang_chu.php");
          ?>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="footer-info text-center">
          copyright viethanit<br>
          0909234231
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>