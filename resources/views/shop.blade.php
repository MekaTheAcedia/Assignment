<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>shop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
			background: linear-gradient(to bottom, #C7214F 30%, #33ccff 100%) no-repeat;
			height: auto;
			margin: 0px;
			padding: 0px;
		}
		.row{
			display: flex;
		}
		.menu{
			display: flex;
			align-items: center;
		}
		.border-menu{
			border-radius: 0 0 10pt 10pt !important;
			background: linear-gradient(to bottom, #ff99cc 0%, #33ccff 100%) !important;
			border: none;
		}
		.border-menu li a{
			color: #fff !important;
		}
		.border-menu li a:hover{
			color: yellow !important;
			cursor: pointer;
		}
		.text_big_header .text_1 h1{
			color: yellow;
			text-transform: uppercase;
			font-weight: bold !important;
			font-size: 40pt !important;
		}
		.text_big_header .text_2 h1{
			color: #fff;
			text-transform: uppercase;
			font-weight: bold !important;
			font-size: 40pt !important;
			margin-left: 80pt;
			margin-top: -15pt;
		}
		.mid-header{
			margin-top: 40pt;
			display: flex;
			margin-bottom: 35pt;
		}
		.img-header{
			width: 100%;
			display: flex;
			justify-content: flex-end;
		}
		.border-menu-bot-header{
			border-radius: 5pt;
			background: linear-gradient(to right, #33ccff 0%, #C7214F 60%);
			border: none;
		}
		.border-menu-bot-header li a{
			color: #fff !important;
			font-weight: bold !important;
			font-size: 12pt;
		}
		.border-menu-bot-header li a:hover{
			color: yellow !important;
		}
		.left_content{
			height: auto;
			background-color: #fff;
			border-radius: 8pt 0 0 8pt;
		}
		.mid_content{
			height: auto;
			background-color: #fff;
			margin: 0 5pt;
			padding-bottom: 20pt;
		}
		.right_content{
			height: auto;
			background-color: #fff;
			border-radius: 0 8pt 8pt 0;
		}
		.content{
			margin-top: -20pt !important;
		}
		.categories-list li{
			list-style: none;
			border-bottom: 2px dashed #ebebe0;
			padding: 5pt 0;
		}
		.categories-list{
			margin-bottom: 15pt;
		}
		.categories-list h3{
			font-weight: bold;
			font-size: 16pt;
		}
		.categories-list li a{
			text-decoration: none;
			color: #ff0066;
			font-weight: bold;
		}
		.categories-list li a:hover{
			color: #33ccff !important;
		}
		.input-data-list{
			margin-bottom: 20pt;
		}
		.input-data-list h3{
			font-weight: bold;
			font-size: 16pt;
		}
		.bt-list{
			margin-top: 5pt;
			height: 25pt;
			width: 75%;
			border-radius: 8pt;
			border: none;
			outline: 0;
			background-color: #e6005c !important;
			color: #fff;
			font-weight: bold;
		}
		.bt-list:hover{
			background-color:#33ccff !important;
			color: #e6005c !important;
		}
		.form-input input{
			width: 97%;
			border-radius: 5pt;
			outline: 0;
			padding: 0 10pt;
			border: 2px solid #ccccb3;
		}
			.text-mid-content{
			display: flex;
		}
		.text-mid-content .text-2{
			padding-left: 10pt;
			color: #ff0066;
		}
		.sp-content{
			display: flex;
			padding: 0px !important;
		}
		.sp{
			border: 2px solid #ebebe0;
			height: auto;
			margin: 0 4pt;
			display: flex;
			flex-direction: column;
			align-items: center;
			padding-bottom: 10pt;
			position: relative;
		}
		.sp:hover{
			background-color: #ffd9b3 !important;
			cursor: pointer;
		}
		.sp img{
			width: 95%;
			margin: 15pt 0;
		}
		.sp h4{
			text-align: center;
			font-weight: bold;
		}
		.sp p{
			color: red;
			font-weight: bold;
		}
		.sp span{
			color: #7c7c50;
		}
		.text-right-content h3{
			font-size: 13pt;
			font-weight: bold;
		}
		.text-right-content{
			margin-bottom: 19pt;
		}
		.img-5{
			position: absolute;
			top: -45px;
			right: -20px;
			width: 50pt;
		}
		.button-right{
			width: 20pt;
			height: 20pt;
			background-color: #ff9900;
			border: none;
			border-radius: 5pt;
			padding-top: 2pt;
			text-align: center;
			color: #fff;
		}
		.list-right-content{
			margin-top: 20pt;
		}
		.button-text-right{
			display: flex;
		}
		.text-bt{
			font-size: 13pt;
			font-weight: bold;
			margin-left: 5pt;
			width: 75%;
		}
		.price{
			color: red;
			margin-top: 5pt;
			display: flex;
			justify-content: center;
			font-weight: bold;
		}
		.add-to-cart h4 {
			color: #ff9900;
			text-align: center;
			border-bottom: 2px solid #ff9900;
		}
		.add-to-cart{
			margin-bottom: 10pt;
		}
	</style>
</head>
<body>
	<header class="header">
		<nav class="container navbar navbar-default border-menu">
			<div class="container-fluid">
				<ul class="nav navbar-nav menu">
					<li><a href="#">My Account</a></li>
					<li>|</li>
					<li><a href="#">Order Status</a></li>
					<li>|</li>
					<li><a href="#">Wish Lists</a></li>
					<li>|</li>
					<li><a href="#">Gift Certificates</a></li>
					<li>|</li>
					<li><a href="#">View Cart</a></li>
					<li>|</li>
					<li><a href="#">Sign in or Create an account</a></li>
				</ul>
			</div>
		</nav>
		<div class="container mid-header">
			<div class="text_big_header">
				<div class="text_1">
					<h1>woman</h1>
				</div>
				<div class="text_2">
					<h1>shoes</h1>
				</div>
			</div>
			<div class="img-header">
				<img src="image/double-arrow.gif">
			</div>
		</div>
		<div class="nav_bottom_header">
			<nav class="container navbar navbar-default border-menu-bot-header">
				<div class="container-fluid">
					<ul class="nav navbar-nav menu">
						<li><a href="#">Home</a></li>
						<li>|</li>
						<li><a href="#">Shippng & Return</a></li>
						<li>|</li>
						<li><a href="#">RSS Syndication</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<content class="container-fluid">
	<div class="container content">
		<div class="row">
			<div class="col-md-2 left_content">
				<div class="categories-list">
					<h3>Categories</h3>
					<li><a href="">Shop Iphone</a></li>
					<li><a href="">Shop Ipod</a></li>
					<li style="border: none;"><a href="">Shop Mac</a></li>
				</div>
				<div class="categories-list" style="margin-bottom: 25pt;">
					<h3>Popular Brands</h3>
					<li><a href="">Apple</a></li>
					<li><a href="">Elgato</a></li>
					<li><a href="">Logitech</a></li>
					<li><a href="">Microsoft</a></li>
					<li><a href="">Speck</a></li>
					<li><a href="">booq</a></li>
					<li><a href="">Crumpler</a></li>
					<li><a href="">Higher Ground</a></li>
					<li style="border: none;"><a href="">Incase</a></li>
				</div>
				<div class="input-data-list">
					<h3>Our Newsletter</h3>
					<form class="form-input" method="post" action="">
						<label>Your First Name :</label>
						<input type="text" name="fullname">
						<label>Your Email Adderss :</label>
						<input type="email" name="email">
						<button class="bt-list">Subscribe me</button>
					</form>
				</div>
			</div>
			<div class="col-md-8 mid_content">
				<div class="text-mid-content">
					<h2>Featured</h2>
					<h2 class="text-2">Products</h2>
				</div>
				<div class=" sp-content">
					@foreach($result as $item)
					<a class="col-md-3 sp" href="product/{{$item->id}}">
						<img src="image/img-{{$item->Image}}.png">
						<h4>{{ $item->Name }}</h4>
						<p>{{ $item->Price }} $</p>
						<span>Not rated</span>
						<button class="bt-list" style="background-color: #cc0052;">Add to Cart</button>
					</a>
					@endforeach
				</div>
				{!! $result->links() !!}
				<div class="text-mid-content" style="margin-top: 15pt;">
					<h2>New</h2>
					<h2 class="text-2">Products</h2>
				</div>
				<div class=" sp-content">
					@foreach($result as $item)
					<a class="col-md-3 sp" href="product">
						<img src="image/img-{{$item->Image}}.png">
						<h4>{{ $item->Name }}</h4>
						<p>{{ $item->Price }} $</p>
						<span>Not rated</span>
						<button class="bt-list" style="background-color: #cc0052;">Add to Cart</button>
					</a>
					@endforeach
				</div>
				{!! $result->links() !!}
			</div>
			<div class="col-md-2 right_content">
				<div class="text-right-content">
					<h3>Current Top Sellers</h3>
				</div>
				<div class="sp">
					<img src="image/img-1.png">
					<h4>MDMH iPhone X Black</h4>
					<p>2.00k$</p>
					<span>Not rated</span>
					<button class="bt-list" style="background-color: #cc0052;">Add to Cart</button>
					<div class="img-5">
						<img src="image/img-5.png">
					</div>
				</div>
				<div class="list-right-content">
					<div class="button-text-right">
						<div class="button-right">
							<p>2</p>
						</div>
						<div class="text-bt">
							<span>MDMH iPhone X White</span>
						</div>
					</div>
					<div class="price">
						<p>99.00$</p>
					</div>
					<div class="add-to-cart">
						<h4>Add to Cart</h4>
					</div>
				</div>
				<div class="list-right-content">
					<div class="button-text-right">
						<div class="button-right">
							<p>3</p>
						</div>
						<div class="text-bt">
							<span>Mic Karaoke kèm loa </span>
						</div>
					</div>
					<div class="price">
						<p>99.00$</p>
					</div>
					<div class="add-to-cart">
						<h4>Add to Cart</h4>
					</div>
				</div>
				<div class="list-right-content">
					<div class="button-text-right">
						<div class="button-right">
							<p>4</p>
						</div>
						<div class="text-bt">
							<span>Sạc dự phòng Veger</span>
						</div>
					</div>
					<div class="price">
						<p>99.00$</p>
					</div>
					<div class="add-to-cart">
						<h4>Add to Cart</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	</content>
</body>
</html>