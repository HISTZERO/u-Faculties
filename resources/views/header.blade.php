<!-- 
<div class="w3-bar w3-top w3-blue w3-large" style="z-index:4;">
	<button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
	<span class="w3-bar-item w3-left"> <a href="search-teacher">Title Website</a></span>
	@if(Auth::check())
	<span class="w3-bar-item w3-right"> <a href="update/teacher">Cập Nhật Thông Tin</a> | <a href="/teacher/logout">Đăng xuất</a></span>
	@else
	<span class="w3-bar-item w3-right"> <a href="teacher/login">Đăng Nhập</a></span>
	@endif
</div> -->

<!-- <link rel="stylesheet" type="text/css" href="Source/css/style.css"> -->

<header>
	<div class="header-top">
		<div class="container clearfix">
			<div class="logo">
				<a href="/"><img src="Source/img/uet-logo.jpg" alt="UET logo" /></a>
			</div>

			<div class="web-title">
				<h1>THÔNG TIN GIẢNG VIÊN</h1>
				<h3>Trường Đại học Công nghệ - Đại học Quốc gia Hà Nội</h3>
			</div>
<!--
				<div class="uni-logo">
					<a href="https://www.vnu.edu.vn" target="_blank"><img src="images/vnu-logo.png" /></a>
				</div>
			-->

			@if(Auth::check())
			<span class="w3-bar-item w3-right"> <a href="update/teacher">Cập Nhật Thông Tin</a> | <a href="/teacher/logout">Đăng xuất</a></span>
			@else
			<span class="w3-bar-item w3-right"> <a href="teacher/login">Đăng Nhập</a></span>
			@endif
		</div> <!--end of container top header-->

	</div><!--end of top header-->
	<div style="height: 1px; background-color: #333333 "></div>
	<div class="header-bot"></div>
</header>

<!-- <style type="text/css">
	html {
		overflow-x: hidden;

	}
	body {
		font-family: 'Arial', sans-serif;
		background: #FFFFFF;
		width: 100%;
		overflow-x: hidden;
		margin: 0;
		padding: 0;
		display: block;
	}

	h1, h3, ul, li, img, a, div {
		margin: 0;
		padding: 0;
	}

	ul, ol {
		list-style-type: none;
		padding: 0;
		margin: 0;
	}

	a {
		text-decoration: none;
		transition: all 0.6s ease-in-out;
	}
	img {
		max-width: 100%;
	}
	.clearfix:after {
		display: block;
		content: "";
		clear: both;
	}


	header {
		display: block;
	}


	.container {
		max-width: 1140px;
		margin: auto;
		display: block;
	}

	.header-top {
		padding: 18px 0px;
	}
	.logo {
		display: inline-block;
		float: left;
	}

	.logo img {
		width: 125px;
	}

	.web-title {
		display: inline-block;
		box-sizing: border-box;
		margin-top: 22px;
		margin-left: 13px;
	}

	.web-title h1 {
		font-size: 35px;
	}


	.web-title h3 {
		font-weight: normal;
		line-height: 35px;
		color: #5B5B5B;
	}

	.uni-logo {
		display: inline-block;
		float: right;
	}

	.uni-logo img {
		width: 110px;
	}

	.header-bot {
		border-top: 1px solid #e2e2e2;
		border-bottom: 0.99px solid #e2e2e2;

	}

	.menu li {
		position: relative;
		float: left;
	}

	.menu > li a {
		color: #555;
		font-size: 13px;
		font-weight: normal;
		padding: 18px 15px;
		display: inline-block;
		border-top: 4px solid transparent;
		box-sizing: border-box;
		transition: all 0.6s ease-in-out;

	}

	.menu > li > a:hover, .menu > li > a.current,
	.menu > li:hover > a {
		border-top-color: #015198;
		background: #F2F2F2;
		color: #015198;
	}

	main {
		background: #EEEEEE;
		padding-top: 12px;
	}

	main .main-top .container {
		background: #FFFFFF;
		padding-bottom: 0px;
	}






	footer {
		background: #333333;
		display: block;
		margin: 0;
		padding: 0;
	}

	.
	.info {
		display: inline-block;
		float: right;
		max-width: 66.67%;
	}

	.info p {
		margin: 0px;
		font-size: 13px;
		padding: 40px 0;
		color: #999999;
		line-height: 25px;
	}


</style> -->